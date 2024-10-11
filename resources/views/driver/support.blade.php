@extends('layouts.mobile-app')

@section('title', 'Support | Driver')
@section('content')
    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
        <div class="col-xs-12 col-sm-12 remaining-height">
            <!--Page Title & Icons Start-->
            <div class="header-icons-container position-relative text-center">
                <a href="index.html">
                    <span class="float-left">
                        <img src="{{ asset('mobile-app-assets/icons/back.svg') }}" alt="Back Icon" />
                    </span>
                </a>
                <span class="title">Support</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="{{ asset('mobile-app-assets/icons/menu.svg') }}" alt="Menu Hamburger Icon" />
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <!--Notification/Support Navigation Container Start-->
            <div class="navigation-container">
                <ul class="nav nav-tabs" id="navigation-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" role="tab" id="support-team-btn"
                            href="#support-team" aria-selected="true">Support Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" role="tab" id="profile-tab" href="#notifications"
                            aria-selected="false">Notifications (<span class="pink">2</span>)</a>
                    </li>
                </ul>
            </div>
            <!--Notification/Support Navigation Container End-->

            <div class="tab-content h-100 overflow-scroll font-roboto" id="navigation-tabs-content">
                <!--Support Container Start-->
                <div class="tab-pane fade show active all-support-team-messages" id="support-team" role="tabpanel">
                    <!--Support Message Container Start-->
                    <a href="chat.html" class="href-decoration-none">
                        <div class="support-team-message-container display-flex">
                            <div class="support-team-profile-picture float-left">
                                <span class="fas fa-circle green-status"></span>
                                <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                            </div>
                            <div class="message-information display-flex">
                                <div class="float-left message-content">
                                    <div class="name">Nino Janashia (Admin)</div>
                                    <div class="message-description">
                                        Technical help, support online
                                    </div>
                                    <div class="message">- Ok, I'm waiting for you!</div>
                                </div>
                                <div class="date float-right font-weight-light grey-label">
                                    Jun 24
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </a>
                    <!--Support Message Container End-->

                    <!--Support Message Container Start-->
                    <a href="chat.html" class="href-decoration-none">
                        <div class="support-team-message-container display-flex">
                            <div class="support-team-profile-picture float-left">
                                <span class="fas fa-circle green-status invisible"></span>
                                <img src="{{ asset('mobile-app-assets/images/profile-7.png') }}" alt="Profile Picture" />
                            </div>
                            <div class="message-information display-flex">
                                <div class="float-left message-content">
                                    <div class="name">Clifford Toff</div>
                                    <div class="message-description">
                                        Technical help, support online
                                    </div>
                                    <div class="message">- Ok, I'm waiting for you!</div>
                                </div>
                                <div class="date float-right font-weight-light grey-label">
                                    Jun 24
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </a>
                    <!--Support Message Container End-->

                    <!--Support Message Container Start-->
                    <a href="chat.html" class="href-decoration-none">
                        <div class="support-team-message-container display-flex">
                            <div class="support-team-profile-picture float-left">
                                <span class="fas fa-circle pink"></span>
                                <img src="{{ asset('mobile-app-assets/images/profile-6.png') }}" alt="Profile Picture" />
                            </div>
                            <div class="message-information display-flex">
                                <div class="float-left message-content">
                                    <div class="name">Lika Asatiani</div>
                                    <div class="message-description">
                                        Technical help, support online
                                    </div>
                                    <div class="message">- Ok, I'm waiting for you!</div>
                                </div>
                                <div class="date float-right font-weight-light grey-label">
                                    Jun 24
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </a>
                    <!--Support Message Container End-->

                    <!--Support Message Container Start-->
                    <a href="chat.html" class="href-decoration-none">
                        <div class="support-team-message-container display-flex">
                            <div class="support-team-profile-picture float-left">
                                <span class="fas fa-circle green-status invisible"></span>
                                <img src="{{ asset('mobile-app-assets/images/profile-5.png') }}" alt="Profile Picture" />
                            </div>
                            <div class="message-information display-flex">
                                <div class="float-left message-content">
                                    <div class="name">Giorgi Copaliani</div>
                                    <div class="message-description">
                                        Technical help, support online
                                    </div>
                                    <div class="message">- Ok, I'm waiting for you!</div>
                                </div>
                                <div class="date float-right font-weight-light grey-label">
                                    <div>Jun 24</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </a>
                    <!--Support Message Container End-->

                    <!--Support Message Container Start-->
                    <a href="chat.html" class="href-decoration-none">
                        <div class="support-team-message-container display-flex">
                            <div class="support-team-profile-picture float-left">
                                <span class="fas fa-circle green-status invisible"></span>
                                <img src="{{ asset('mobile-app-assets/images/profile-4.png') }}" alt="Profile Picture" />
                            </div>
                            <div class="message-information display-flex">
                                <div class="float-left message-content">
                                    <div class="name">Matilda Hart</div>
                                    <div class="message-description">
                                        Technical help, support online
                                    </div>
                                    <div class="message">- Ok, I'm waiting for you!</div>
                                </div>
                                <div class="date float-right font-weight-light grey-label">
                                    Jun 24
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </a>
                    <!--Support Message Container End-->
                </div>
                <!--Support Container End-->

                <!--Notification Container Start-->
                <div class="tab-pane fade all-support-team-messages" id="notifications" role="tabpanel">
                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle pink"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle pink"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->

                    <!--Notification Message Container Start-->
                    <div class="support-team-message-container display-flex">
                        <div class="support-team-profile-picture float-left">
                            <span class="fas fa-circle invisible"></span>
                            <img src="{{ asset('mobile-app-assets/images/profile-2.png') }}" alt="Profile Picture" />
                        </div>
                        <div class="message-information display-flex">
                            <div class="float-left message-content">
                                <div class="name">Nino Janashia (Admin)</div>
                                <div class="message-description cut font-roboto-condensed font-italic">
                                    <span>Nice Double Room with Own Bathroom Lorem ipsum dolor site
                                        amet concateur more laret concait</span>
                                </div>
                            </div>
                            <div class="date float-right font-weight-light date-read">
                                <div>Jun 24</div>
                                <div class="read-button">
                                    <a href="chat.html">Read</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Notification Message Container End-->
                </div>
                <!--Notification Container End-->
            </div>
        </div>

    <!--Main Menu Start-->
        @include('components.driver-mobile-app.main-menu')
        <!--Main Menu End-->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
