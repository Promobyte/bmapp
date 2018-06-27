@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- Team -->

    <!--brand icon-->


        <div class="container">

            <div class="row no-gutters">
                <!-- Team member -->
                <a class="col-xs-12 col-sm-6 col-md-4 deco-none" href="/projects">


                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="fas fa-user-clock fa-8x"></i>
                                        <h4 class="card-title">Timereg</h4>
                                    </div>
                                </div>


                </a>
                <!-- ./Team member -->
                <!-- Team member -->
                <a class="col-xs-12 col-sm-6 col-md-4 deco-none" href="#">

                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="card-icon fas fa-tasks fa-8x" aria-hidden="true"></i>
                                        <h4 class="card-title">Prosjekt</h4>
                                    </div>

                    </div>
                </a>
                <!-- ./Team member -->
                <!-- Team member -->
                <a class="col-xs-12 col-sm-6 col-md-4 deco-none" href="#">

                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="card-icon fa fa-question fa-8x" aria-hidden="true"></i>
                                        <h4 class="card-title">Instruksjoner</h4>
                                    </div>

                    </div>
                </a>
                <!-- ./Team member -->
                <!-- Team member -->
                <a class="col-xs-12 col-sm-6 col-md-4 deco-none" href="#">

                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="card-icon fa fa-clock fa-8x" aria-hidden="true"></i>
                                        <h4 class="card-title">Placeholder</h4>
                                    </div>
                                </div>

                </a>
                <!-- ./Team member -->
                <!-- Team member -->
                <a class="col-xs-12 col-sm-6 col-md-4 deco-none" href="#">

                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="card-icon fa fa-clock fa-8x" aria-hidden="true"></i>
                                        <h4 class="card-title">Placeholder</h4>
                                    </div>
                                </div>
                            </a>

                <!-- ./Team member -->
                <!-- Team member -->
                <a class="col-xs-12 col-sm-6 col-md-4 deco-none" href="#">

                                <div class="card">
                                    <div class="card-body text-center">
                                        <i class="card-icon fa fa-clock fa-8x" aria-hidden="true"></i>
                                        <h4 class="card-title">Placeholder</h4>
                                    </div>
                                </div>
                            </a>

                <!-- ./Team member -->

            </div>
        </div>


    <!-- Team -->
@endsection
