<section class="px-3">
    <div class="head-title p-3 mt-lg-3 mb-4">
        <ul class="nav nav-pills my-3 justify-content-around" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link px-lg-5 active" data-bs-toggle="pill" data-bs-target="#infor" type="button"
                        role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa-solid fa-user me-2"></i><span
                            class="d-none d-md-inline">Personal Information</span><span
                            class="d-md-none">Information</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link px-lg-5" data-bs-toggle="pill" data-bs-target="#account" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="false"><i
                            class="fa-solid fa-shield-halved me-2"></i><span
                            class="d-none d-md-inline">Account Security</span><span class="d-md-none">Account</span>
                </button>
            </li>
        </ul>
    </div>
    <div class="container pb-4 px-0">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="infor" role="tabpanel" aria-labelledby="pills-home-tab"
                 tabindex="0">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="fw-bold py-1 border-bottom mb-3">Billing Information</div>
                                <div class="row justify-content-lg-between">
                                    <div class="col-md-6 col-lg-5">
                                        <div class="mb-3">
                                            <label class="form-label fw-light">First Name</label>
                                            <div class="input-group">
                                                <input class="form-control rounded-3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-5">
                                        <div class="mb-3">
                                            <label class="form-label fw-light">Last Name</label>
                                            <div class="input-group">
                                                <input class="form-control rounded-3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-5">
                                        <div class="mb-3">
                                            <label class="form-label fw-light">Email</label>
                                            <div class="input-group">
                                                <input class="form-control rounded-3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-5">
                                        <div class="mb-3">
                                            <label class="form-label fw-light">Phone</label>
                                            <div class="input-group">
                                                <input class="form-control rounded-3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-5">
                                        <div class="mb-3">
                                            <label class="form-label fw-light">Address</label>
                                            <div class="input-group">
                                                <input class="form-control rounded-3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-5">
                                        <div class="mb-3">
                                            <label class="form-label fw-light">Town/City</label>
                                            <div class="input-group">
                                                <input class="form-control rounded-3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-5">
                                        <div class="mb-3">
                                            <label class="form-label fw-light">Country</label>
                                            <select class="form-select rounded-3" aria-label="Default select example">
                                                <option selected="">Country</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-5">
                                        <div class="mb-3">
                                            <label class="form-label fw-light">State</label>
                                            <div class="input-group">
                                                <input class="form-control rounded-3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center py-3"><a class="btn btn-start hvr-float"
                                                                                   href="order-confirm.html">Save
                                        Changes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="fw-bold py-1 border-bottom mb-3">Update Password</div>
                                <div class="mb-3">
                                    <label class="form-label fw-light">Current Password</label>
                                    <div class="input-group">
                                        <input class="form-control rounded-3" type="password">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-light">New Password</label>
                                    <div class="input-group">
                                        <input class="form-control rounded-3" type="password">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-light">Confirm New Password</label>
                                    <div class="input-group">
                                        <input class="form-control rounded-3" type="password">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center py-3"><a class="btn btn-start hvr-float"
                                                                                   href="order-confirm.html">Save
                                        Changes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>