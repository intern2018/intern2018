@extends('inc.layouts')

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-left" href="{{ url('/') }}">
                {{"Inventory"}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="app-nabar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                        <a class="nav-link" href="issued">Issued</a>
                        <a class="nav-link" href="form">Form</a>
                        <a class="nav-link" href="user">UserControllCard</a>
                        <a  class="nav-link" href="test">Test</a>
                        <div class="container">
                            <form class="form-inline mt-2 mt-md-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                </ul>
            </div>
        </div>
    </nav>
