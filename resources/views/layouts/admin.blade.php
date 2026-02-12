<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    @stack('styles')
    <style>
        :root {
            --bg: #f6f7fb;
            --panel: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #e5e7eb;
            --accent: #1d4ed8;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Arial, sans-serif;
            color: var(--text);
            background: var(--bg);
        }
        .layout {
            min-height: 100vh;
            display: grid;
            grid-template-rows: auto 1fr auto;
            grid-template-columns: 240px 1fr;
            grid-template-areas:
                "sidebar navbar"
                "sidebar content"
                "sidebar footer";
        }
        .navbar {
            grid-area: navbar;
            background: var(--panel);
            border-bottom: 1px solid var(--border);
            padding: 12px 20px;
        }
        .sidebar {
            grid-area: sidebar;
            background: #111827;
            color: #e5e7eb;
            padding: 20px 16px;
        }
        .content {
            grid-area: content;
            padding: 20px;
        }
        .footer {
            grid-area: footer;
            padding: 12px 20px;
            color: var(--muted);
            border-top: 1px solid var(--border);
            background: var(--panel);
        }
        .card {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 16px;
        }
        .sidebar a {
            color: #e5e7eb;
            text-decoration: none;
        }
        .sidebar ul { list-style: none; padding-left: 0; margin: 0; }
        .sidebar li { margin: 6px 0; }
        .sidebar strong { display: block; margin-bottom: 6px; color: #f9fafb; }
        .nav-brand {
            font-weight: 600;
        }
        @media (max-width: 860px) {
            .layout {
                grid-template-columns: 1fr;
                grid-template-areas:
                    "navbar"
                    "content"
                    "footer";
            }
            .sidebar { display: none; }
        }
    </style>
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            @include('partials.sidebar')
        </aside>
        <header class="navbar">
            @include('partials.navbar')
        </header>
        <main class="content">
            <div class="card">
                @yield('content')
            </div>
        </main>
        <footer class="footer">
            @include('partials.footer')
        </footer>
    </div>
</body>
</html>
