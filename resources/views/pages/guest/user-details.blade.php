@extends('layouts.wide')
@section('content')
    <div class="personal-details">
        @if($errors->any())
            @include('components.guest.danger-message')
        @endif
        <h1 class="heading-4">Personal Details</h1>
        <div class="form-block-4 w-form">
            <form method="post" name="email-form" action="{{ route('user.register.handle') }}">
                {{ csrf_field() }}
                <label for="full-name" class="welcome-form-label">Your name</label>
                <input type="text" class="name-fields w-input" maxlength="256" name="name"
                       data-name="full-name" placeholder="enter your name" id="full-name" value="{{ old('name') }}"
                       required>

                <label for="nick_name" class="welcome-form-label">Nick name</label>
                <input type="text" class="name-fields w-input" maxlength="256" name="nick_name"
                       data-name="nick_name" placeholder="enter your nick name" id="nick_name"
                       value="{{ old('nick_name') }}" required>

                <label for="gender" class="welcome-form-label">Gender</label>
                <select id="gender" name="gender" class="name-fields w-select">
                    <option value="" disabled selected>Select one...</option>
                    <option value="m">male</option>
                    <option value="f">female</option>
                </select>
                <label for="Password" class="welcome-form-label">Create Password</label>
                <input type="password" class="name-fields w-input" maxlength="256" name="password"
                       data-name="Password" placeholder="enter your password" id="Password"
                       required="">
                <label for="Password-3" class="welcome-form-label">Retype Password</label>
                <input type="password" class="name-fields w-input" maxlength="256" name="password_confirmation"
                       data-name="Password 2" placeholder="confirm password" id="Password-2"
                       required="">
                <label for="accounts" class="welcome-form-label">Select account type</label>
                <select id="accounts" name="accounts[]" class="name-fields w-select" multiple>
                    <option value="" disabled selected>Select one...</option>
                    <option value="artist">Artist</option>
                    <option value="producer">Producer</option>
                    <option value="composer">Composer</option>
                    <option value="writer">Writer</option>
                    <option value="manager">Manager</option>
                    <option value="label">Label Rep</option>
                </select>
                <input type="submit" value="register" data-wait="Please wait..." class="_50 w-button">
                <input type="submit" value="Verify" data-wait="Please wait..." class="email-button w-button">
            </form>
        </div>
    </div>
@endsection