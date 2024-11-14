@extends('layouts.dashboardMain')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

        <div class="row">
            <div class="col-md-12">
                <form id="formAccountSettings" method="POST" action="{{ route('update-profile', $myProfile->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <hr class="my-0" />
                        <!-- Account -->
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="{{ $myProfile->avatar }}" alt="user-avatar" class="d-block rounded"
                                            height="100" width="100" id="uploadedAvatar" />
                                        <div class="mb-3 col-md">
                                            <label for="formFile" class="form-label">Default file input example</label>
                                            <input type="file" name="image" id="inputImage"
                                                class="form-control @error('image') is-invalid @enderror"
                                                accept="image/jpeg, image/jpg, image/png, image/gif" />
                                            <p class="text-muted mb-0">Allowed JPG, JPEG, GIF or PNG. Max size of 500kb</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">Nama</label>
                                    <input class="form-control" type="text" id="firstName" name="name"
                                        value="{{ $myProfile->name }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">
                                        Email @if (!Auth::user()->email_verified_at)
                                            <small> * Email not verified </small>
                                        @endif
                                    </label>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control @if (!Auth::user()->email_verified_at) red @endif" name="email"
                                            value="{{ $email }}" aria-label="Recipient's username"
                                            aria-describedby="basic-addon13" />
                                        <span class="input-group-text" id="basic-addon13">@gmail.com</span>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="kontak" class="form-label">Phone</label>
                                    <input class="form-control" type="text" id="kontak" name="kontak"
                                        value="{{ $myProfile->kontak }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="alamat" class="form-label">Address</label>
                                    <input class="form-control" type="text" id="alamat" name="alamat"
                                        value="{{ $myProfile->alamat }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="deskripsi" class="form-label">Description</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $myProfile->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button id="btnSubmit" type="submit" class="btn btn-primary me-2">Save changes</button>
                            </div>
                        </div>
                        <!-- /Account -->
                    </div>
                </form>

                <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                                <p class="mb-0">Once you delete your account, there is no going back. Please be certain.
                                </p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" action="{{ route('menu.edit', $myProfile->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation" />
                                <label class="form-check-label" for="accountActivation">I confirm my account
                                    deactivation</label>
                            </div>
                            <button id="confirm_deactive" type="submit" class="btn btn-danger deactivate-account me-2"
                                disabled>Deactivate Account</button>
                            <a href="#" class="btn btn-outline-warning me-2" data-bs-toggle="modal"
                                data-bs-target="#modalCenter">Change Password</a>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Reset Password --}}
    <form id="formAccountSettings" method="POST" action="{{ route('update-profile', $myProfile->id) }}">
        @csrf
        @method('PUT')
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Change Password Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-password-toggle mb-3 col-md-6">
                                <label class="form-label" for="basic-default-password1">Old Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="old_password" class="form-control"
                                        id="basic-default-password32"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="basic-default-password" />
                                    <span class="input-group-text cursor-pointer" id="basic-default-password"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="form-password-toggle mb-3 col-md-6">
                                <label class="form-label" for="basic-default-password2">New Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer" id="basic-default-password"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="form-password-toggle mb-3 col-md-6">
                                <label class="form-label" for="basic-default-password3">Confirm New Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="new_password" class="form-control"
                                        id="confirm_password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer" id="basic-default-password"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button id="reset_pass" type="submit" class="btn btn-primary me-2" disabled>Save
                            changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Check Match Password --}}
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
                confirm_password.reportValidity();
                // disable button with id
                document.querySelector('button[id="reset_pass"]').disabled = true;

            } else {
                confirm_password.setCustomValidity('');
                // enable button
                document.querySelector('button[id="reset_pass"]').disabled = false;
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

    {{-- check checkbox  accountActivation --}}
    <script>
        var accountActivation = document.getElementById("accountActivation");

        // if checkbox is checked, enable button
        accountActivation.onchange = function() {
            if (this.checked) {
                document.querySelector('button[id="confirm_deactive"]').disabled = false;
            } else {
                document.querySelector('button[id="confirm_deactive"]').disabled = true;
            }
        };
    </script>
    <script>
        inputImage.onchange = evt => {
            const [file] = inputImage.files
            if (file) {
                uploadedAvatar.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
