{{-- <!-- Sidebar -->
<style>
    .sidebar {
        background-color: #f8f9fa; /* gray-white */
        border-right: 1px solid #e5e7eb;
    }

    .sidebar h4 {
        color: #1f2937;
        font-weight: 600;
    }

    .sidebar .nav-link {
        color: #374151;
        font-weight: 500;
        padding: 10px 12px;
        border-radius: 6px;
        transition: background 0.2s ease;
    }

    .sidebar .nav-link:hover {
        background-color: #e5e7eb;
        color: #111827;
    }

    .sidebar .nav-link.active {
        background-color: #e5e7eb;
        font-weight: 600;
    }
</style>

<nav class="col-md-3 col-lg-2 sidebar min-vh-100 p-3">
    <h4 class="text-center mb-4">Admin Panel</h4>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.contacts.contact')}}" class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
              <i class="fa-solid fa-phone me-2"></i>Contacts
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.users.user')}}" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <i class="fas fa-users me-2"></i> Users
            </a>
        </li>

        
       <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-cog me-2"></i> Settings
            </a>
        </li>
         
    </ul>
</nav> --}}
<!-- Sidebar Styles -->
<style>
   /* =========================================================
   ADMIN SIDEBAR - WHITE GLASS STYLE
========================================================= */

:root {
    --sidebar-bg: rgba(255, 255, 255, 0.72);
    --sidebar-bg-solid: rgba(255, 255, 255, 0.92);
    --sidebar-text: #475569;
    --sidebar-text-hover: #0f172a;

    --sidebar-primary: #2563eb;
    --sidebar-primary-light: rgba(37, 99, 235, 0.10);

    --sidebar-border: rgba(15, 23, 42, 0.08);
    --sidebar-shadow: rgba(15, 23, 42, 0.08);
}


/* =========================================================
   SIDEBAR
========================================================= */

.sidebar {
    position: sticky;
    top: 0;

    height: 100vh;
    min-height: 100vh;

    background: var(--sidebar-bg);

    backdrop-filter: blur(18px) saturate(160%);
    -webkit-backdrop-filter: blur(18px) saturate(160%);

    border-right: 1px solid var(--sidebar-border);

    box-shadow:
        4px 0 20px var(--sidebar-shadow);

    display: flex;
    flex-direction: column;

    padding: 0 !important;

    z-index: 100;

    overflow: hidden;
}


/* =========================================================
   SIDEBAR HEADER
========================================================= */

.sidebar-header {
    flex-shrink: 0;

    height: 75px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 0 20px;

    background: rgba(255, 255, 255, 0.55);

    border-bottom: 1px solid var(--sidebar-border);

    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
}

.sidebar-header h4 {
    margin: 0;

    color: #0f172a;

    font-size: 1.25rem;
    font-weight: 700;

    display: flex;
    align-items: center;
    gap: 10px;
}

.sidebar-header h4 i {
    color: var(--sidebar-primary);

    font-size: 1.1rem;
}


/* =========================================================
   SIDEBAR SCROLL AREA
========================================================= */

.sidebar-nav {
    flex: 1;

    min-height: 0;

    padding: 20px 14px;

    overflow-y: auto;
    overflow-x: hidden;

    scrollbar-width: thin;
    scrollbar-color: rgba(100, 116, 139, 0.25) transparent;
}


/* Chrome / Edge / Safari */

.sidebar-nav::-webkit-scrollbar {
    width: 5px;
}

.sidebar-nav::-webkit-scrollbar-track {
    background: transparent;
}

.sidebar-nav::-webkit-scrollbar-thumb {
    background: rgba(100, 116, 139, 0.25);

    border-radius: 20px;

    transition: background 0.3s ease;
}

.sidebar-nav::-webkit-scrollbar-thumb:hover {
    background: rgba(100, 116, 139, 0.45);
}


/* =========================================================
   NAVIGATION
========================================================= */

.sidebar-nav .nav {
    gap: 5px;
}

.sidebar-nav .nav-item {
    margin: 2px 0;
}


/* =========================================================
   NAV LINK
========================================================= */

.sidebar .nav-link {
    position: relative;

    display: flex;
    align-items: center;

    width: 100%;

    min-height: 48px;

    padding: 12px 14px;

    gap: 12px;

    color: var(--sidebar-text);

    background: transparent;

    border: 1px solid transparent;

    border-radius: 10px;

    text-decoration: none;

    font-size: 0.94rem;
    font-weight: 500;

    transition:
        color 0.25s ease,
        background 0.25s ease,
        transform 0.25s ease,
        box-shadow 0.25s ease;
}


/* =========================================================
   ICON
========================================================= */

.sidebar .nav-link i {
    width: 22px;

    flex-shrink: 0;

    text-align: center;

    font-size: 1rem;

    color: #64748b;

    transition: all 0.25s ease;
}


/* =========================================================
   HOVER
========================================================= */

.sidebar .nav-link:hover {
    color: var(--sidebar-text-hover);

    background: rgba(37, 99, 235, 0.06);

    border-color: rgba(37, 99, 235, 0.10);

    transform: translateX(3px);
}

.sidebar .nav-link:hover i {
    color: var(--sidebar-primary);

    transform: scale(1.08);
}


/* =========================================================
   ACTIVE PAGE
========================================================= */

.sidebar .nav-link.active {
    color: var(--sidebar-primary);

    background: var(--sidebar-primary-light);

    border-color: rgba(37, 99, 235, 0.12);

    font-weight: 600;

    box-shadow:
        0 4px 12px rgba(37, 99, 235, 0.08);
}


/* Active left indicator */

.sidebar .nav-link.active::before {
    content: "";

    position: absolute;

    left: -1px;
    top: 7px;
    bottom: 7px;

    width: 4px;

    background: var(--sidebar-primary);

    border-radius: 0 5px 5px 0;
}


/* Active icon */

.sidebar .nav-link.active i {
    color: var(--sidebar-primary);

    transform: scale(1.08);
}


/* =========================================================
   NAV TEXT
========================================================= */

.sidebar .nav-text {
    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;
}


/* =========================================================
   BADGE
========================================================= */

.nav-badge {
    margin-left: auto;

    padding: 3px 8px;

    min-width: 24px;

    text-align: center;

    border-radius: 20px;

    background: rgba(37, 99, 235, 0.10);

    color: var(--sidebar-primary);

    font-size: 0.68rem;

    font-weight: 700;
}


/* =========================================================
   FOOTER
========================================================= */

.sidebar-footer {
    flex-shrink: 0;

    position: relative;

    left: auto;
    right: auto;
    bottom: auto;

    padding: 14px;

    background: rgba(255, 255, 255, 0.65);

    border-top: 1px solid var(--sidebar-border);

    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
}


/* =========================================================
   USER PROFILE
========================================================= */

.user-profile {
    display: flex;
    align-items: center;

    gap: 10px;

    padding: 10px;

    border-radius: 10px;

    transition: background 0.25s ease;
}

.user-profile:hover {
    background: rgba(37, 99, 235, 0.06);
}

.user-avatar {
    width: 38px;
    height: 38px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    background: linear-gradient(
        135deg,
        #2563eb,
        #3b82f6
    );

    color: white;

    border-radius: 50%;

    font-size: 0.8rem;
    font-weight: 700;

    box-shadow:
        0 4px 10px rgba(37, 99, 235, 0.25);
}

.user-info {
    flex: 1;

    min-width: 0;
}

.user-name {
    color: #0f172a;

    font-size: 0.85rem;
    font-weight: 600;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.user-role {
    color: #64748b;

    font-size: 0.72rem;

    margin-top: 2px;
}


/* =========================================================
   MAIN CONTENT
========================================================= */

.admin-main {
    min-height: 100vh;

    background: #f8fafc;
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 768px) {

    .sidebar {
        position: relative;

        width: 100%;

        height: auto;
        min-height: auto;

        max-height: none;

        border-right: none;

        border-bottom: 1px solid var(--sidebar-border);
    }

    .sidebar-nav {
        overflow-y: visible;
    }

    .sidebar-footer {
        position: relative;
    }
}
</style>

<!-- Sidebar HTML -->
<nav class="col-md-3 col-lg-2 sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <h4>
            <i class="fas fa-shield-alt"></i>
            Admin Panel
        </h4>
    </div>

    <!-- Navigation Items -->
    <div class="sidebar-nav flex-grow-1">
        <ul class="nav flex-column">
            <!-- Dashboard -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-text">Dashboard</span>
                    <span class="nav-badge">New</span>
                </a>
            </li>

            <!-- Contacts -->
            <li class="nav-item">
                <a href="{{route('admin.contacts.contact')}}" 
                   class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-phone"></i>
                    <span class="nav-text">Contacts</span>
                    <span class="nav-badge">5</span>
                </a>
            </li>

            <!-- Users -->
            <li class="nav-item">
                <a href="{{route('admin.users.user')}}" 
                   class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Users</span>
                    <span class="nav-badge">24</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.education.index') }}" class="nav-link {{ request()->routeIs('admin.education.*') ? 'active' : '' }}">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-text">Education</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.certifications.index') }}" class="nav-link {{ request()->routeIs('admin.certifications.*') ? 'active' : '' }}">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-text">Certifications</span>
                </a>
            </li>
            <!-- Additional Menu Items -->
            <li class="nav-item">
                <a href="{{ route('admin.projects.index') }}" class="nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-text">Projects</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-file-invoice"></i>
                    <span class="nav-text">Reports</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-question-circle"></i>
                    <span class="nav-text">Help & Support</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Sidebar Footer with User Profile -->
    <div class="sidebar-footer">
        <div class="user-profile">
            <div class="user-avatar">
                AP
            </div>
            <div class="user-info">
                <div class="user-name">Admin User</div>
                <div class="user-role">Administrator</div>
            </div>
            <i class="fas fa-chevron-down" style="color: var(--sidebar-text); font-size: 0.9rem;"></i>
        </div>
    </div>
</nav>

<!-- Optional JavaScript for interactivity -->
<script>

</script>