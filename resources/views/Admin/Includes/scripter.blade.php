<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/common.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/fontawesome.min.js')}}"></script>
<script src="{{URL::asset('assets/js/dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/dropify.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery-textarea.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/toastr.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/quill.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/validate.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
<script>
    $('.dropify').dropify();
    $(".textarea").jqte();
</script>

<script>
    const textMaxLength = parseInt(@json(config('constant.validation.text.maxlength')), 10);
    const textMaxLengthMessage = @json(config('constant.validation.text.maxlength_message'));
    const textRegex = @json(config('constant.validation.text.regex'));
    const textRegexMessage = @json(config('constant.validation.text.regex_message'));
    const textareaMaxLength = parseInt(@json(config('constant.validation.textarea.maxlength')), 10);
    const textareaMaxLengthMessage = @json(config('constant.validation.textarea.maxlength_message'));
    const addressMaxLength = parseInt(@json(config('constant.validation.address.maxlength')), 10);
    const addressMaxLengthMessage = @json(config('constant.validation.address.maxlength_message'));
    const phoneMinLength = parseInt(@json(config('constant.validation.phone.minlength')), 10);
    const phoneMinLengthMessage = @json(config('constant.validation.phone.minlength_message'));
    const phoneMaxLength = parseInt(@json(config('constant.validation.phone.maxlength')), 10);
    const phoneMaxLengthMessage = @json(config('constant.validation.phone.maxlength_message'));
    const emailMaxLength = parseInt(@json(config('constant.validation.email.maxlength')), 10);
    const emailMaxLengthMessage = @json(config('constant.validation.email.maxlength_message'));
    const emailRegex = @json(config('constant.validation.email.regex'));
    const emailRegex_message = @json(config('constant.validation.email.regex_message'));
    const passwordMinLength = parseInt(@json(config('constant.validation.password.minlength')), 10);
    const passwordMinLengthMessage = @json(config('constant.validation.password.minlength_message'));
    const passwordMaxLength = parseInt(@json(config('constant.validation.password.maxlength')), 10);
    const passwordMaxLengthMessage = @json(config('constant.validation.password.maxlength_message'));
    const imageMaxsize = parseInt(@json(config('constant.validation.image.maxsize')), 10);
    const imageMaxsizeMessage = @json(config('constant.validation.image.maxsize_message'));
    const imageAllowedType = @json(config('constant.validation.image.allowedtype'));
    const imageAllowedTypeMessage = @json(config('constant.validation.image.allowedtype_message'));
    const videoMaxsize = parseInt(@json(config('constant.validation.video.maxsize')), 10);
    const videoMaxsizeMessage = @json(config('constant.validation.video.maxsize_message'));
    const videoAllowedType = @json(config('constant.validation.video.allowedtype'));
    const videoAllowedTypeFrontend = @json(config('constant.validation.video.allowedtypefrontend'));
    const videoAllowedTypeMessage = @json(config('constant.validation.video.allowedtype_message'));

    function VideoValidator(file){
        if (file.size > videoMaxsize*1024) {
            return videoMaxsizeMessage
        }
        if (!videoAllowedTypeFrontend.includes(file.type)) {
            return videoAllowedTypeMessage;
        }
        return null;
    }

    $.validator.addMethod("checkFileType", function(value, element) {
        if (element.files.length > 0) {
            var fileType = element.files[0].type;
            return imageAllowedType.includes(fileType);
        }
        return true;
    }, imageAllowedTypeMessage);

    $.validator.addMethod("checkImageSize", function(value, element) {
        if (element.files.length > 0) {
            var fileSize = element.files[0].size;
            return fileSize <= imageMaxsize;
        }
        return true;
    }, imageMaxsizeMessage);

    $.validator.addMethod("regex", function(value, element) {
        var re = new RegExp(emailRegex.replace(/^\/|\/$/g, ""));
        return this.optional(element) || re.test(value);
    }, emailRegex_message);
    
    $.validator.addMethod("text_regex", function(value, element) {
        var re = new RegExp(textRegex.replace(/^\/|\/$/g, ""));
        return this.optional(element) || re.test(value);
    }, textRegexMessage);
</script>

<script>
    var element = document.getElementById('editor-container')
    if(element != null){
        var quill = new Quill(element, {
            theme: 'snow',
            placeholder: 'Write your content here ...',
        });
    }
</script>

<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
    }

    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif

    @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif

    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif

    function success_toast(title = '', message = '') {
        toastr.success(message);
    }

    function error_toast(title = '', message = '') {
        toastr.error(message);
    }
</script>
@yield('script')