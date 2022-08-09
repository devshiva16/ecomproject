
@extends('admin.layout')

@section('content')

<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
            <h2 class="nk-block-title fw-normal">Form Elements</h2>
            <div class="nk-block-des">
                <p class="lead">Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms. Here’s a quick example to demonstrate form styles, so use these classes to opt into their customized displays.</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Form controls</h4>
                <div class="nk-block-des">
                    <p>Textual form controls—like <code class="code-tag">&lt;input&gt;</code>s, <code class="code-tag">&lt;select&gt;</code>s, and <code class="code-tag">&lt;textarea&gt;</code>s—are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more. Additional classes can be used to vary this layout on a per-form basis.</p>
                </div>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="preview-block">
                    <span class="preview-title-lg overline-title">Default Preview</span>
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-01">Input text Default</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="default-01" placeholder="Input placeholder">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-05">Input with Text</label>
                                <div class="form-control-wrap">
                                    <div class="form-text-hint">
                                        <span class="overline-title">Usd</span>
                                    </div>
                                    <input type="text" class="form-control" id="default-05" placeholder="Input placeholder">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-03">Input with Icon Left</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-user"></em>
                                    </div>
                                    <input type="text" class="form-control" id="default-03" placeholder="Input placeholder">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="default-04">Input with Icon Right</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-mail"></em>
                                    </div>
                                    <input type="text" class="form-control" id="default-04" placeholder="Input placeholder">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-textarea">Textarea</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control no-resize" id="default-textarea">Large text area content</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-06">Default File Upload</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" multiple class="form-file-input" id="customFile">
                                        <label class="form-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="default-06">Default Select</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="default-06">
                                            <option value="default_option">Default Option</option>
                                            <option value="option_select_name">Option select name</option>
                                            <option value="option_select_name">Option select name</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-07">Default Select Multiple</label>
                                <div class="form-control-wrap">
                                    <div class="form-control-select-multiple">
                                        <select class="form-select" id="default-07" multiple>
                                            <option value="option_select0">Default Option</option>
                                            <option value="option_select1">Option select name</option>
                                            <option value="option_select2">Option select name</option>
                                            <option value="option_select2">Option select name</option>
                                            <option value="option_select2">Option select name</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">State Preview</span>
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-01">Focus State</label>
                                <input type="text" class="form-control focus" id="default-1-01" placeholder="Input placeholder">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-02">Filled State</label>
                                <input type="text" class="form-control" id="default-1-02" value="Abu Bin Ishtiyak">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-04">Error State</label>
                                <input type="text" class="form-control error" id="default-1-04" placeholder="Input placeholder">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-03">Disabled State</label>
                                <input type="text" class="form-control" id="default-1-03" disabled value="info@softnio.com">
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">Size Preview </span>
                    <div class="row gy-4 align-center">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg" placeholder="Input Large">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" placeholder="Input Regular">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-sm" placeholder="Input Small">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-soft">Use <code>.form-control-lg</code> or <code>.form-control-sm</code> with <code>.form-control</code> for large or small input box.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .card-preview -->
        <div class="code-block">
            <h6 class="overline-title title">Code Example</h6>
            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#formElements" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
            <pre class="prettyprint lang-html" id="formElements">
&lt;div class=&quot;form-group&quot;&gt;
&lt;label class=&quot;form-label&quot; for=&quot;default-01&quot;&gt;Input text label&lt;/label&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;default-01&quot; placeholder=&quot;Input placeholder&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;form-group&quot;&gt;
&lt;label class=&quot;form-label&quot; for=&quot;default-02&quot;&gt;Textarea label&lt;/label&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;textarea class=&quot;form-control&quot; id=&quot;default-textarea&quot;&gt;Large text area content&lt;/textarea&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
        </div><!-- .code-block -->
    </div><!-- .nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Form Outlined</h4>
                <div class="nk-block-des">
                    <p>Textual form controls—like <code class="code-tag">&lt;input&gt;</code>s, <code class="code-tag">&lt;select&gt;</code>s, and <code class="code-tag">&lt;textarea&gt;</code>s—are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more. Additional classes can be used to vary this layout on a per-form basis.</p>
                </div>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="preview-block">
                    <span class="preview-title-lg overline-title">Outlined Preview</span>
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal">
                                    <label class="form-label-outlined" for="outlined-normal">Input text outlined</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right xl">
                                        <em class="icon ni ni-user"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon">
                                    <label class="form-label-outlined" for="outlined-right-icon">Input with icon</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-ui="xl" id="outlined-select">
                                        <option value="default_option">Default Option</option>
                                        <option value="option_select_name">Option select name</option>
                                        <option value="option_select_name">Option select name</option>
                                    </select>
                                    <label class="form-label-outlined" for="outlined-select">Outlined Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right xl">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined date-picker" id="outlined-date-picker">
                                    <label class="form-label-outlined" for="outlined-date-picker">Date Picker</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right xl">
                                        <em class="icon ni ni-clock"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined time-picker" id="outlined-time-picker">
                                    <label class="form-label-outlined" for="outlined-time-picker">Time Picker</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">Outlined Sizes</span>
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-xl">
                                    <label class="form-label-outlined" for="outlined-xl">Input text xl</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg form-control-outlined" id="outlined-lg">
                                    <label class="form-label-outlined" for="outlined-lg">Input text lg</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-outlined" id="outlined-default">
                                    <label class="form-label-outlined" for="outlined-default">Input text</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-soft">Use <code>.form-control-outlined</code> with <code>.form-control</code> for outlined form element and replace <code>.form-label</code> with <code>.form-label-outlined</code>, also place label after input/select element.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .card-preview -->
        <div class="code-block">
            <h6 class="overline-title title">Code Example</h6>
            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#formOutlined" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
            <pre class="prettyprint lang-html" id="formOutlined">
&lt;div class=&quot;form-group&quot;&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control form-control-outlined&quot; id=&quot;outlined&quot; placeholder=&quot;Input placeholder&quot;&gt;
&lt;label class=&quot;form-label-outlined&quot; for=&quot;outlined&quot;&gt;Input text label&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
        </div><!-- .code-block -->
    </div><!-- .nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Select with Select2</h4>
                <div class="nk-block-des">
                    <p>As <code>.form-select</code> class use for default <code class="code-tag">&lt;select&gt;</code>, using <code>.js-select2</code> class in <code class="code-tag">&lt;select&gt;</code> element to replace browser default style with <a href="https://select2.org/" target="_blank">Select2</a>, as its give you a customizable select box with support for searching, tagging, and many other highly used options. For the documentation for Select2, that can be found <a href="https://select2.org/" target="_blank">here</a>.</p>
                </div>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="row gy-4">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Select2 Default</label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Select2 With Search</label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" data-search="on">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Select2 Multiple</label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" multiple="multiple" data-placeholder="Select Multiple options">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="text-soft">For large or small size of Select2, use <code>lg</code>, <code>sm</code> in <code>data-ui=""</code> attribute of <code class="code-tag">&lt;select&gt;</code> element. And you can use <code>on</code> in <code>data-search=""</code> attribute to display search option in select2.</p>
                    </div>
                </div>
            </div>
        </div><!-- .card-preview -->
        <div class="code-block">
            <h6 class="overline-title title">Code Example</h6>
            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#select2Elements" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
            <pre class="prettyprint lang-html" id="select2Elements">
&lt;div class=&quot;form-group&quot;&gt;
&lt;label class=&quot;form-label&quot;&gt;Select2 Default&lt;/label&gt;
&lt;div class=&quot;form-control-wrap&quot;&gt;
&lt;select class=&quot;form-select&quot;&gt;
...
&lt;/select&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
        </div><!-- .code-block -->
    </div><!-- .nk-block -->
</div><!-- .components-preview -->

@endsection