<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_delete', false)
            ->with('parent')
            ->orderByDesc('id')
            ->get();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::where('is_delete', false)
            ->orderBy('name')
            ->get();

        return view('category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'string', 'max:255'],
            'parent_id' => [
                'nullable',
                Rule::exists('categories', 'id')->where('is_delete', false),
            ],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data['is_active'] = $request->boolean('is_active');
        $data['is_delete'] = false;

        Category::create($data);

        return redirect()->route('category.index');
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        $excludedIds = $this->getDescendantIds($category);
        $excludedIds[] = $category->id;

        $categories = Category::where('is_delete', false)
            ->whereNotIn('id', $excludedIds)
            ->orderBy('name')
            ->get();

        return view('category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, int $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'string', 'max:255'],
            'parent_id' => [
                'nullable',
                Rule::exists('categories', 'id')->where('is_delete', false),
            ],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $parentId = $data['parent_id'] ?? null;
        if ($parentId !== null) {
            $descendantIds = $this->getDescendantIds($category);
            if ($parentId === $category->id || in_array($parentId, $descendantIds, true)) {
                return back()
                    ->withErrors(['parent_id' => 'Danh muc cha khong hop le.'])
                    ->withInput();
            }
        }

        $data['is_active'] = $request->boolean('is_active');

        $category->update($data);

        return redirect()->route('category.index');
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->update(['is_delete' => true]);

        return redirect()->route('category.index');
    }

    private function getDescendantIds(Category $category): array
    {
        $descendants = [];
        $queue = [$category->id];

        while (!empty($queue)) {
            $parentId = array_shift($queue);
            $childIds = Category::where('parent_id', $parentId)->pluck('id')->all();
            foreach ($childIds as $childId) {
                if (!in_array($childId, $descendants, true)) {
                    $descendants[] = $childId;
                    $queue[] = $childId;
                }
            }
        }

        return $descendants;
    }
}
