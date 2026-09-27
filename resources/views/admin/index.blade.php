@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

<style>
    /* =========================================================
       DASHBOARD
    ========================================================= */

    .dashboard-wrapper {
        padding: 10px 0 30px;
    }

    /* Header */
    .dashboard-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 28px;
    }

    .dashboard-title h1 {
        margin: 0;
        color: #0f172a;
        font-size: 1.8rem;
        font-weight: 750;
        letter-spacing: -0.5px;
    }

    .dashboard-title p {
        margin: 7px 0 0;
        color: #64748b;
        font-size: 0.92rem;
    }

    .dashboard-date {
        display: flex;
        align-items: center;
        gap: 9px;
        padding: 10px 15px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        color: #64748b;
        font-size: 0.85rem;
        box-shadow: 0 3px 12px rgba(15, 23, 42, 0.04);
    }

    .dashboard-date i {
        color: #2563eb;
    }


    /* =========================================================
       STATISTICS CARDS
    ========================================================= */

    .stat-card {
        position: relative;
        height: 100%;
        padding: 22px;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.25s ease;
        box-shadow: 0 5px 20px rgba(15, 23, 42, 0.04);
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
        border-color: rgba(37, 99, 235, 0.18);
    }

    .stat-card::after {
        content: "";
        position: absolute;
        width: 90px;
        height: 90px;
        right: -35px;
        top: -35px;
        border-radius: 50%;
        background: rgba(37, 99, 235, 0.05);
    }

    .stat-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .stat-icon {
        width: 46px;
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        font-size: 1.05rem;
    }

    .stat-icon.blue {
        color: #2563eb;
        background: rgba(37, 99, 235, 0.10);
    }

    .stat-icon.green {
        color: #059669;
        background: rgba(5, 150, 105, 0.10);
    }

    .stat-icon.orange {
        color: #d97706;
        background: rgba(217, 119, 6, 0.10);
    }

    .stat-icon.purple {
        color: #7c3aed;
        background: rgba(124, 58, 237, 0.10);
    }

    .stat-menu {
        color: #94a3b8;
        font-size: 0.9rem;
        cursor: pointer;
    }

    .stat-label {
        margin-bottom: 5px;
        color: #64748b;
        font-size: 0.84rem;
        font-weight: 500;
    }

    .stat-value {
        color: #0f172a;
        font-size: 1.8rem;
        font-weight: 750;
        line-height: 1.2;
    }

    .stat-footer {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 12px;
        font-size: 0.76rem;
    }

    .stat-growth {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        color: #059669;
        font-weight: 650;
    }

    .stat-period {
        color: #94a3b8;
    }


    /* =========================================================
       CONTENT PANELS
    ========================================================= */

    .dashboard-panel {
        height: 100%;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        box-shadow: 0 5px 20px rgba(15, 23, 42, 0.04);
        overflow: hidden;
    }

    .panel-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 19px 22px;
        border-bottom: 1px solid #eef2f7;
    }

    .panel-header h5 {
        margin: 0;
        color: #0f172a;
        font-size: 0.98rem;
        font-weight: 700;
    }

    .panel-header p {
        margin: 4px 0 0;
        color: #94a3b8;
        font-size: 0.76rem;
    }

    .view-all {
        color: #2563eb;
        font-size: 0.78rem;
        font-weight: 600;
        text-decoration: none;
    }

    .view-all:hover {
        color: #1d4ed8;
    }


    /* =========================================================
       ACTIVITY
    ========================================================= */

    .activity-list {
        padding: 5px 22px 12px;
    }

    .activity-item {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 13px;
        padding: 16px 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .activity-item:last-child {
        border-bottom: none;
    }

    .activity-icon {
        width: 36px;
        height: 36px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        color: #2563eb;
        background: rgba(37, 99, 235, 0.08);
        font-size: 0.82rem;
    }

    .activity-content {
        min-width: 0;
        flex: 1;
    }

    .activity-content h6 {
        margin: 0 0 4px;
        color: #334155;
        font-size: 0.84rem;
        font-weight: 600;
    }

    .activity-content p {
        margin: 0;
        color: #94a3b8;
        font-size: 0.74rem;
    }

    .activity-time {
        color: #94a3b8;
        font-size: 0.7rem;
        white-space: nowrap;
    }


    /* =========================================================
       QUICK ACTIONS
    ========================================================= */

    .quick-actions {
        padding: 15px;
    }

    .quick-action {
        display: flex;
        align-items: center;
        gap: 13px;
        width: 100%;
        padding: 13px;
        margin-bottom: 8px;
        color: #334155;
        background: #f8fafc;
        border: 1px solid #eef2f7;
        border-radius: 11px;
        text-decoration: none;
        transition: all 0.22s ease;
    }

    .quick-action:last-child {
        margin-bottom: 0;
    }

    .quick-action:hover {
        color: #2563eb;
        background: rgba(37, 99, 235, 0.05);
        border-color: rgba(37, 99, 235, 0.12);
        transform: translateX(3px);
    }

    .quick-action-icon {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 9px;
        color: #2563eb;
        background: #ffffff;
        box-shadow: 0 2px 8px rgba(15, 23, 42, 0.06);
    }

    .quick-action-text {
        flex: 1;
    }

    .quick-action-text strong {
        display: block;
        font-size: 0.8rem;
        font-weight: 650;
    }

    .quick-action-text span {
        display: block;
        margin-top: 2px;
        color: #94a3b8;
        font-size: 0.69rem;
    }

    .quick-action-arrow {
        color: #cbd5e1;
        font-size: 0.75rem;
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 768px) {

        .dashboard-wrapper {
            padding-top: 5px;
        }

        .dashboard-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .dashboard-title h1 {
            font-size: 1.5rem;
        }

        .dashboard-date {
            width: 100%;
        }

        .stat-card {
            padding: 18px;
        }

        .stat-value {
            font-size: 1.55rem;
        }
    }
</style>


<div class="dashboard-wrapper">

    <!-- =====================================================
         DASHBOARD HEADER
    ====================================================== -->

    <div class="dashboard-header">

        <div class="dashboard-title">

            <h1>Dashboard</h1>

            <p>
                Welcome back,
                <strong>
                    {{ Auth::guard('admin')->user()->name ?? 'Admin' }}
                </strong>.
                Here's what's happening today.
            </p>

        </div>

        <div class="dashboard-date">
            <i class="far fa-calendar-alt"></i>

            {{ now()->format('d M Y') }}
        </div>

    </div>


    <!-- =====================================================
         STATISTICS
    ====================================================== -->

    <div class="row g-4 mb-4">

        <!-- Total Users -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-icon blue">
                        <i class="fas fa-users"></i>
                    </div>

                    <i class="fas fa-ellipsis-h stat-menu"></i>

                </div>

                <div class="stat-label">
                    Total Users
                </div>

                <div class="stat-value">
                    1,234
                </div>

                <div class="stat-footer">

                    <span class="stat-growth">
                        <i class="fas fa-arrow-up"></i>
                        12.5%
                    </span>

                    <span class="stat-period">
                        vs last month
                    </span>

                </div>

            </div>

        </div>


        <!-- Active Projects -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-icon green">
                        <i class="fas fa-layer-group"></i>
                    </div>

                    <i class="fas fa-ellipsis-h stat-menu"></i>

                </div>

                <div class="stat-label">
                    Active Projects
                </div>

                <div class="stat-value">
                    42
                </div>

                <div class="stat-footer">

                    <span class="stat-growth">
                        <i class="fas fa-arrow-up"></i>
                        8.2%
                    </span>

                    <span class="stat-period">
                        vs last month
                    </span>

                </div>

            </div>

        </div>


        <!-- Pending Tasks -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-icon orange">
                        <i class="fas fa-clock"></i>
                    </div>

                    <i class="fas fa-ellipsis-h stat-menu"></i>

                </div>

                <div class="stat-label">
                    Pending Tasks
                </div>

                <div class="stat-value">
                    15
                </div>

                <div class="stat-footer">

                    <span class="stat-growth">
                        <i class="fas fa-arrow-down"></i>
                        4.3%
                    </span>

                    <span class="stat-period">
                        vs last month
                    </span>

                </div>

            </div>

        </div>


        <!-- Total Messages -->
        <div class="col-xl-3 col-md-6">

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-icon purple">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <i class="fas fa-ellipsis-h stat-menu"></i>

                </div>

                <div class="stat-label">
                    Messages
                </div>

                <div class="stat-value">
                    86
                </div>

                <div class="stat-footer">

                    <span class="stat-growth">
                        <i class="fas fa-arrow-up"></i>
                        16.4%
                    </span>

                    <span class="stat-period">
                        vs last month
                    </span>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         RECENT ACTIVITY + QUICK ACTIONS
    ====================================================== -->

    <div class="row g-4">

        <!-- Recent Activity -->
        <div class="col-lg-8">

            <div class="dashboard-panel">

                <div class="panel-header">

                    <div>
                        <h5>Recent Activity</h5>
                        <p>Latest updates from your admin panel</p>
                    </div>

                    <a href="#" class="view-all">
                        View All
                    </a>

                </div>


                <div class="activity-list">

                    <!-- Activity 1 -->
                    <div class="activity-item">

                        <div class="activity-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>

                        <div class="activity-content">

                            <h6>New user registered</h6>

                            <p>
                                John Doe created a new account.
                            </p>

                        </div>

                        <div class="activity-time">
                            10 min ago
                        </div>

                    </div>


                    <!-- Activity 2 -->
                    <div class="activity-item">

                        <div class="activity-icon">
                            <i class="fas fa-folder-open"></i>
                        </div>

                        <div class="activity-content">

                            <h6>Project updated</h6>

                            <p>
                                Website Redesign was updated.
                            </p>

                        </div>

                        <div class="activity-time">
                            1 hour ago
                        </div>

                    </div>


                    <!-- Activity 3 -->
                    <div class="activity-item">

                        <div class="activity-icon">
                            <i class="fas fa-tasks"></i>
                        </div>

                        <div class="activity-content">

                            <h6>New task assigned</h6>

                            <p>
                                A new task has been assigned to you.
                            </p>

                        </div>

                        <div class="activity-time">
                            3 hours ago
                        </div>

                    </div>


                    <!-- Activity 4 -->
                    <div class="activity-item">

                        <div class="activity-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>

                        <div class="activity-content">

                            <h6>System update completed</h6>

                            <p>
                                Admin system maintenance completed successfully.
                            </p>

                        </div>

                        <div class="activity-time">
                            Yesterday
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Quick Actions -->
        <div class="col-lg-4">

            <div class="dashboard-panel">

                <div class="panel-header">

                    <div>
                        <h5>Quick Actions</h5>
                        <p>Frequently used sections</p>
                    </div>

                </div>


                <div class="quick-actions">

                    <a href="{{ route('admin.projects.create') }}"
                       class="quick-action">

                        <div class="quick-action-icon">
                            <i class="fas fa-plus"></i>
                        </div>

                        <div class="quick-action-text">
                            <strong>Add Project</strong>
                            <span>Create a new project</span>
                        </div>

                        <i class="fas fa-chevron-right quick-action-arrow"></i>

                    </a>


                    <a href="{{ route('admin.education.create') }}"
                       class="quick-action">

                        <div class="quick-action-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>

                        <div class="quick-action-text">
                            <strong>Add Education</strong>
                            <span>Add academic information</span>
                        </div>

                        <i class="fas fa-chevron-right quick-action-arrow"></i>

                    </a>


                    <a href="{{ route('admin.certifications.create') }}"
                       class="quick-action">

                        <div class="quick-action-icon">
                            <i class="fas fa-certificate"></i>
                        </div>

                        <div class="quick-action-text">
                            <strong>Add Certification</strong>
                            <span>Add a new certificate</span>
                        </div>

                        <i class="fas fa-chevron-right quick-action-arrow"></i>

                    </a>


                    <a href="{{ route('admin.contacts.contact') }}"
                       class="quick-action">

                        <div class="quick-action-icon">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="quick-action-text">
                            <strong>View Messages</strong>
                            <span>Check contact messages</span>
                        </div>

                        <i class="fas fa-chevron-right quick-action-arrow"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection