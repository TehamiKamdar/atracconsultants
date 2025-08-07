@extends('layouts.admin_layout')

@section('scripts')
    <script src="{{asset('admin/jqueryui/external/jquery/jquery.js')}}" defer></script>
    <script src="{{asset('admin/jqueryui/jquery-ui.min.js')}}" defer></script>
    <script src="{{asset('admin/script.js')}}" defer></script>
@endsection

@section('content')
    <div class="container-fluid board">
        <div class="row g-3">
            <!-- Pending Column -->
            <div class="col-md-6">
                <div class="column pending" data-status="pending">
                    <h3><i class="ri-time-fill"></i> Pending</h3>
                    <div class="column-content">
                        <div class="task draggable pending" draggable="true">
                            <div class="task-header">
                                <i class="ri-user-3-fill"></i> Jane Smith
                            </div>
                            <div class="task-content">
                                <div class="user-detail">
                                    <span class="detail-label">Role:</span>
                                    <span class="detail-value">Designer</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Since:</span>
                                    <span class="detail-value">22/06/2023</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Tasks:</span>
                                    <span class="detail-value">3</span>
                                </div>
                            </div>
                        </div>
                        <div class="task draggable pending" draggable="true">
                            <div class="task-header">
                                <i class="ri-user-3-fill"></i> Mike Johnson
                            </div>
                            <div class="task-content">
                                <div class="user-detail">
                                    <span class="detail-label">Role:</span>
                                    <span class="detail-value">Manager</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Since:</span>
                                    <span class="detail-value">05/01/2023</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Tasks:</span>
                                    <span class="detail-value">7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Column -->
            <div class="col-md-6">
                <div class="column active" data-status="active">
                    <h3><i class="ri-user-follow-fill"></i> Active</h3>
                    <div class="column-content">
                        <div class="task draggable active" draggable="true">
                            <div class="task-header">
                                <i class="ri-user-3-fill"></i> John Doe
                            </div>
                            <div class="task-content">
                                <div class="user-detail">
                                    <span class="detail-label">Role:</span>
                                    <span class="detail-value">Developer</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Since:</span>
                                    <span class="detail-value">12/05/2023</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Tasks:</span>
                                    <span class="detail-value">5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hold Column -->
            <div class="col-md-6">
                <div class="column hold" data-status="hold">
                    <h3><i class="ri-pause-fill"></i> Hold</h3>
                    <div class="column-content">
                        <div class="task draggable hold" draggable="true">
                            <div class="task-header">
                                <i class="ri-user-3-fill"></i> Sarah Williams
                            </div>
                            <div class="task-content">
                                <div class="user-detail">
                                    <span class="detail-label">Role:</span>
                                    <span class="detail-value">Analyst</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Since:</span>
                                    <span class="detail-value">18/03/2023</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Tasks:</span>
                                    <span class="detail-value">2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reject Column -->
            <div class="col-md-6">
                <div class="column reject" data-status="reject">
                    <h3><i class="ri-close-circle-fill"></i> Reject</h3>
                    <div class="column-content">
                        <div class="task draggable reject" draggable="true">
                            <div class="task-header">
                                <i class="ri-user-3-fill"></i> David Brown
                            </div>
                            <div class="task-content">
                                <div class="user-detail">
                                    <span class="detail-label">Role:</span>
                                    <span class="detail-value">Tester</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Since:</span>
                                    <span class="detail-value">30/07/2023</span>
                                </div>
                                <div class="user-detail">
                                    <span class="detail-label">Tasks:</span>
                                    <span class="detail-value">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
