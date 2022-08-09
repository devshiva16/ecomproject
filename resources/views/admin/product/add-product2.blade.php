
@extends('admin.layout')

@section('Content')

<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
            <h2 class="nk-block-title fw-normal">jQuery Form Validation</h2>
            <div class="nk-block-des">
                <p class="lead">Using the <a href="https://jqueryvalidation.org/" target="_blank">jQuery Validation</a> plugin, you can simply add validation on clientside before submit form. The plugin also offering plenty of customization options. For a full overview of this plugin, check out the <a href="https://jqueryvalidation.org/" target="_blank">documentation</a>.</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Validation - Regular Style</h4>
                <div class="nk-block-des">
                    <p>Validating your form, just add the class <code class="code-class">.form-validate</code> to any <code class="code-tag">&lt;form&gt;</code>, then it validate the form show error message.</p>
                </div>
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="#" class="form-validate">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-full-name">Full Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="fv-full-name" name="fv-full-name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-email">Email address</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-mail"></em>
                                    </div>
                                    <input type="text" class="form-control" id="fv-email" name="fv-email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-phone">Phone</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-phone">+880</span>
                                        </div>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-phone">Sex / Gender</label>
                                <div class="form-control-wrap">
                                    <ul class="custom-control-group">
                                        <li>
                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                <input type="radio" class="custom-control-input" name="fv-sex" id="sex-male" required>
                                                <label class="custom-control-label" for="sex-male">Male</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                <input type="radio" class="custom-control-input" name="fv-sex" id="sex-female" required>
                                                <label class="custom-control-label" for="sex-female">Female</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                <input type="radio" class="custom-control-input" name="fv-sex" id="sex-other" required>
                                                <label class="custom-control-label" for="sex-other">Others</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-subject">Subject</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="fv-subject" name="fv-subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-topics">Topics</label>
                                <div class="form-control-wrap ">
                                    <select class="form-select js-select2" id="fv-topics" name="fv-topics" data-placeholder="Select a option" required>
                                        <option label="empty" value=""></option>
                                        <option value="fv-gq">General Question</option>
                                        <option value="fv-tq">Tachnical Question</option>
                                        <option value="fv-ab">Account &amp; Billing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="fv-message">Message</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="fv-message" name="fv-message" placeholder="Write your message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Communication</label>
                                <ul class="custom-control-group g-3 align-center">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-email" required>
                                            <label class="custom-control-label" for="fv-com-email">Email</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-sms" required>
                                            <label class="custom-control-label" for="fv-com-sms">SMS</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-phone" required>
                                            <label class="custom-control-label" for="fv-com-phone">Phone</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- .nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Validation - Alternet Style</h4>
                <div class="nk-block-des">
                    <p>You can add <code class="code-class">.is-alter</code> with <code class="code-class">.form-validate</code> class then all the error message show different style.</p>
                </div>
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="#" class="form-validate is-alter">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fva-full-name">Full Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="fva-full-name" name="fva-full-name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fva-email">Email address</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-mail"></em>
                                    </div>
                                    <input type="text" class="form-control" id="fva-email" name="fva-email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-phone">Phone</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-phone">+880</span>
                                        </div>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-phone">Sex / Gender</label>
                                <div class="form-control-wrap">
                                    <ul class="custom-control-group">
                                        <li>
                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                <input type="radio" class="custom-control-input" name="fv-sex" id="alt-sex-male" required>
                                                <label class="custom-control-label" for="alt-sex-male">Male</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                <input type="radio" class="custom-control-input" name="fv-sex" id="alt-sex-female" required>
                                                <label class="custom-control-label" for="alt-sex-female">Female</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                <input type="radio" class="custom-control-input" name="fv-sex" id="alt-sex-other" required>
                                                <label class="custom-control-label" for="alt-sex-other">Others</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fva-subject">Subject</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="fva-subject" name="fva-subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fva-topics">Topics</label>
                                <div class="form-control-wrap ">
                                    <select class="form-select js-select2" id="fva-topics" name="fva-topics" data-placeholder="Select a option" required>
                                        <option label="empty" value=""></option>
                                        <option value="fva-gq">General Question</option>
                                        <option value="fva-tq">Tachnical Question</option>
                                        <option value="fva-ab">Account &amp; Billing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="fva-message">Message</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="fva-message" name="fva-message" placeholder="Write your message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Communication</label>
                                <ul class="custom-control-group g-3 align-center">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fva-com" id="fva-com-email" required>
                                            <label class="custom-control-label" for="fva-com-email">Email</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fva-com" id="fva-com-sms" required>
                                            <label class="custom-control-label" for="fva-com-sms">SMS</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="fva-com" id="fva-com-phone" required>
                                            <label class="custom-control-label" for="fva-com-phone">Phone</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- .nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Uses Instruction</h4>
                <p>you need to follow some instructions to work this validation as intended</p>
                <div class="card card-preview">
                    <div class="card-inner">
                        <p>Must use <code>name</code> attribute for any form <code>input, select, textarea</code> element tag for validation.</p>
                        <p>Want set custom message for validation, then simply use <code>[data-msg="Error message"]</code>, <code>[data-msg-email="Invaid Email"]</code> with form element.</p>
                        <p>Please ensure you have wrap form element with a parent <code>.form-control-wrap</code> class.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .nk-block -->
</div><!-- .components-preview -->

@endsection