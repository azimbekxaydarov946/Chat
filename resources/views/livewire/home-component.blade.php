<div>
    {{-- @php
    dd($users2);
@endphp --}}
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="card">
                            <div class="body">
                                <div id="plist" class="people-list">
                                    <div class="chat-search">
                                        <input type="text" class="form-control" placeholder="Search..." />
                                    </div>
                                    <div class="m-b-20">
                                        <div id="chat-scroll">
                                            <ul class="chat-list list-unstyled m-b-0">
                                                @foreach ($users as $user)
                                                    <li class="clearfix"
                                                        wire:click="$emit('chatid',{{ $users[0]->chat->user->id }})">
                                                        <img src="{{ $user->gender == 0? 'assets/img/users/user.png': ($user->gender == 1? 'assets/img/users/user-3.png': 'assets/img/users/user-9.png') }}"
                                                            alt="avatar">
                                                        <div class="about">
                                                            <div class="name">
                                                                {{ $users[0]->chat->user->first_name }}</div>
                                                            <div class="status">
                                                                <i class="material-icons online">fiber_manual_record</i>
                                                                online

                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        @if ($isOpen)
                            <div class="card">
                                <div class="chat">
                                    <div class="chat-header clearfix">
                                        <img src="assets/img/users/user-1.png" alt="avatar">
                                        <div class="chat-about">
                                            <div class="chat-with"></div>
                                            <div class="chat-num-messages">online</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-box" id="mychatbox">
                                    <div class="card-body ">
                                        <div class="chat-item chat-left">
                                            {{-- <img src="assets/img/users/user-5.png"
                                                style="width: 50px;border-radius: 50%"> --}}
                                            <div class="chat-details">
                                                <div class="chat-text" style="box-shadow: 0 4px 25px 0 rgb(0 0 0 / 10%);background-color: #fff;padding: 10px 15px;border-radius: 3px;width: auto;display: inline-block;
                                          font-size: 12px;">Hi, How R U?!</div>
                                                <div class="chat-time" style="    margin-top: 5px;font-size: 12px;font-weight: 500; opacity: 0.6;">{{\Carbon\Carbon::now()->timezone('Asia/Tashkent')->format('H:i')}}</div>
                                            </div>
                                        </div>
                                        <div class="chat-item chat-right" style="margin-left: 80% ">
                                            {{-- <img src="assets/img/users/user-5.png"
                                                style="width: 50px;border-radius: 50%"> --}}
                                            <div class="chat-details">
                                                <div class="chat-text" style="text-align: left; background-color: #6777ef;color: #fff; box-shadow: 0 4px 25px 0 rgb(0 0 0 / 10%);
                                                padding: 10px 15px;
                                                border-radius: 3px;
                                                width: auto;
                                                display: inline-block;
                                                font-size: 12px;">Hi, How R U?!</div>
                                                <div class="chat-time" style="margin-top: 5px; font-size: 12px;font-weight: 500; opacity: 0.6;;">{{\Carbon\Carbon::now()->timezone('Asia/Tashkent')->format('H:i')}}</div>
                                            </div>
                                        </div>
                                        <div class="card-footer chat-form">
                                            <form id="chat-form">
                                                <input type="text" class="form-control" placeholder="Type a message">
                                                <button class="btn btn-primary">
                                                    <i class="far fa-paper-plane"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout"
                                    checked>
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2"
                                    class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1"
                                    class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar"
                                    checked>
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Color Theme</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li title="black">
                                    <div class="black"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="orange">
                                    <div class="orange"></div>
                                </li>
                                <li title="green">
                                    <div class="green"></div>
                                </li>
                                <li title="red">
                                    <div class="red"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="sticky_header_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Sticky Header</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
