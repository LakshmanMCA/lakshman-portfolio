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
    /* Sidebar Variables */
    :root {
        --sidebar-bg: #0f172a;
        --sidebar-primary: #3b82f6;
        --sidebar-primary-hover: #2563eb;
        --sidebar-text: #cbd5e1;
        --sidebar-text-hover: #f8fafc;
        --sidebar-active-bg: rgba(59, 130, 246, 0.15);
        --sidebar-border: #1e293b;
        --sidebar-shadow: rgba(0, 0, 0, 0.2);
        --sidebar-header: #f8fafc;
    }

    /* Sidebar Container */
    .sidebar {
        background: var(--sidebar-bg);
        border-right: 1px solid var(--sidebar-border);
        box-shadow: 2px 0 10px var(--sidebar-shadow);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        min-height: 100vh;
        padding: 0;
    }

    /* Sidebar Header */
    .sidebar-header {
        padding: 24px 20px;
        border-bottom: 1px solid var(--sidebar-border);
        background: rgba(15, 23, 42, 0.95);
        backdrop-filter: blur(10px);
    }

    .sidebar-header h4 {
        color: var(--sidebar-header);
        font-weight: 700;
        font-size: 1.5rem;
        letter-spacing: 0.5px;
        margin: 0;
        text-align: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .sidebar-header h4::before {
        content: '';
        width: 8px;
        height: 8px;
        background: var(--sidebar-primary);
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(1.2); }
    }

    /* Navigation Items Container */
    .sidebar-nav {
        padding: 20px 15px;
    }

    /* Navigation List */
    .nav.flex-column {
        gap: 8px;
    }

    /* Navigation Items */
    .nav-item {
        margin: 4px 0;
    }

    /* Navigation Links */
    .nav-link {
        color: var(--sidebar-text);
        font-weight: 500;
        padding: 14px 16px;
        border-radius: 10px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        border: 1px solid transparent;
    }

    /* Hover Effect */
    .nav-link:hover {
        background: rgba(59, 130, 246, 0.1);
        color: var(--sidebar-text-hover);
        border-color: rgba(59, 130, 246, 0.3);
        transform: translateX(5px);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.1);
    }

    /* Active State */
    .nav-link.active {
        background: var(--sidebar-active-bg);
        color: var(--sidebar-primary);
        border-left: 4px solid var(--sidebar-primary);
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
    }

    .nav-link.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: var(--sidebar-primary);
        border-radius: 0 2px 2px 0;
    }

    /* Icons */
    .nav-link i {
        font-size: 1.1rem;
        width: 24px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .nav-link:hover i,
    .nav-link.active i {
        transform: scale(1.1);
        color: var(--sidebar-primary);
    }

    /* Badge for notifications (optional) */
    .nav-badge {
        background: var(--sidebar-primary);
        color: white;
        font-size: 0.7rem;
        padding: 2px 8px;
        border-radius: 12px;
        margin-left: auto;
        font-weight: 600;
    }

    /* Sidebar Footer (optional) */
    .sidebar-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        border-top: 1px solid var(--sidebar-border);
        background: rgba(15, 23, 42, 0.95);
    }

    .user-profile {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px;
        border-radius: 10px;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .user-profile:hover {
        background: rgba(59, 130, 246, 0.1);
    }

    .user-avatar {
        width: 36px;
        height: 36px;
        background: var(--sidebar-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .user-info {
        flex: 1;
    }

    .user-name {
        color: var(--sidebar-text-hover);
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 2px;
    }

    .user-role {
        color: var(--sidebar-text);
        font-size: 0.8rem;
        opacity: 0.8;
    }

    /* Collapsed Sidebar (optional feature) */
    .sidebar.collapsed {
        width: 80px;
    }

    .sidebar.collapsed .nav-text {
        display: none;
    }

    .sidebar.collapsed .sidebar-header h4 {
        font-size: 0;
    }

    .sidebar.collapsed .sidebar-header h4::before {
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .sidebar {
            min-height: auto;
            border-right: none;
            border-bottom: 1px solid var(--sidebar-border);
        }
        
        .sidebar-nav {
            padding: 15px;
        }
        
        .nav-link {
            padding: 12px 14px;
        }
        
        .sidebar-header {
            padding: 20px 15px;
        }
    }

    /* Animation for active state */
    @keyframes activePulse {
        0% { box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.4); }
        70% { box-shadow: 0 0 0 10px rgba(59, 130, 246, 0); }
        100% { box-shadow: 0 0 0 0 rgba(59, 130, 246, 0); }
    }

    .nav-link.active {
        animation: activePulse 2s infinite;
    }

    /* Submenu styles (if needed) */
    .nav-submenu {
        padding-left: 40px;
        margin-top: 4px;
        display: none;
    }

    .nav-item.has-submenu.open .nav-submenu {
        display: block;
    }

    .nav-submenu .nav-link {
        padding: 10px 16px;
        font-size: 0.9rem;
        border-left: 2px solid var(--sidebar-border);
    }

    .nav-submenu .nav-link:hover {
        border-left-color: var(--sidebar-primary);
    }
</style>

<!-- Sidebar HTML -->
<nav class="col-md-3 col-lg-2 sidebar d-flex flex-column">
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
document.addEventListener('DOMContentLoaded', function() {
    // Add active state on click
    const navLinks = document.querySelectorAll('.sidebar .nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));
            
            // Add active class to clicked link
            this.classList.add('active');
            
            // If you want to keep the route-based active state for specific links,
            // you might want to conditionally add this behavior
            const href = this.getAttribute('href');
            if (href === '#' || href.startsWith('{{route')) {
                // For demo purposes or non-route links
                e.preventDefault();
            }
        });
    });
    
    // Toggle sidebar collapse (optional feature)
    const sidebar = document.querySelector('.sidebar');
    const toggleBtn = document.createElement('button');
    toggleBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
    toggleBtn.className = 'sidebar-toggle';
    toggleBtn.style.cssText = `
        position: absolute;
        right: -12px;
        top: 20px;
        width: 24px;
        height: 24px;
        background: var(--sidebar-primary);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 100;
        transition: all 0.3s ease;
    `;
    
    // Uncomment to add toggle functionality
    // sidebar.appendChild(toggleBtn);
    
    // toggleBtn.addEventListener('click', function() {
    //     sidebar.classList.toggle('collapsed');
    //     this.innerHTML = sidebar.classList.contains('collapsed') 
    //         ? '<i class="fas fa-chevron-right"></i>' 
    //         : '<i class="fas fa-chevron-left"></i>';
    // });
    
    // Highlight current page
    const currentPath = window.location.pathname;
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath || 
            link.href === window.location.href) {
            link.classList.add('active');
        }
    });
});
</script>