(function(){
    /***Check validate form***/
    (function(){
        var error = 0;
        function checkValidate(){
            var errorStatus = '';
            var xusername = $('input[name="xUsername"]').val();
            var regexUsername = /^([a-z0-9]).{6,19}$/;
            if(regexUsername.test(xusername)){
                $('input[name="xUsername"]').closest('.form-group').find('.invalid-feedback').remove();
                errorStatus = true;
            }else{
                $('input[name="xUsername"]').find('.invalid-feedback').remove();
                $('input[name="xUsername"]').closest('.form-group').append(errorMsg['xUsername']);
                errorStatus = false;
            }
            var xPassword = $('input[name="xPassword"]').val();
            var regexPassWord = /^([a-z0-9]).{6,19}$/;
            if(regexPassWord.test(xPassword)){
                $('input[name="xPassword"]').closest('.form-group').find('.invalid-feedback').remove();
                errorStatus = true;
            }else{
                $('input[name="xPassword"]').find('.invalid-feedback').remove();
                $('input[name="xPassword"]').closest('.form-group').append(errorMsg['xPassword']);
                errorStatus = false;
            }
            var xPasswordConfirm = $('input[name="xPasswordConfirm"]').val();
            if(xPasswordConfirm==xPassword && xPassword!=''){
                 $('input[name="xPasswordConfirm"]').closest('.form-group').find('.invalid-feedback').remove();
            }else{
                $('input[name="xPasswordConfirm"]').closest('.form-group').find('.invalid-feedback').remove();
                $('input[name="xPasswordConfirm"]').closest('.form-group').append(errorMsg['xPasswordConfirm']);
            }
            var xPhone = $('input[name="xPhone"]').val();
            var regexPhone = /^([0-9]).{8,10}$/;
            if(regexPhone.test(xPhone) ){
                $('input[name="xPhone"]').closest('.form-group').find('.invalid-feedback').remove();
                errorStatus = true;
            }else{
                $('input[name="xPhone"]').find('.invalid-feedback').remove();
                $('input[name="xPhone"]').closest('.form-group').append(errorMsg['xPhone']);
                errorStatus = false;
            }
            var xName = $('input[name="xName"]').val();
            var regexName = /^([a-zA-Z\s])+$/;
            if(regexName.test(xName) ){
                $('input[name="xName"]').closest('.form-group').find('.invalid-feedback').remove();
                errorStatus = true;
            }else{
                $('input[name="xName"]').find('.invalid-feedback').remove();
                $('input[name="xName"]').closest('.form-group').append(errorMsg['xName']);
                errorStatus = false;
            }
            var xEmail = $('input[name="xEmail"]').val();
            var emailStatus = checkEamil(xEmail);
            if(emailStatus){
                $('input[name="xEmail"]').closest('.form-group').closest('.form-group').find('.invalid-feedback').remove();
                errorStatus = true;
            }else{
                $('input[name="xEmail"]').find('.invalid-feedback').remove();
                $('input[name="xEmail"]').closest('.form-group').append(errorMsg['xEmail']);
                errorStatus = false;
            }
            var xCaptcha = $('input[name="xCaptcha"]').val();
            if(xCaptcha!=''){
                $('input[name="xCaptcha"]').closest('.form-group').closest('.form-group').find('.invalid-feedback').remove();
                errorStatus = true;
            }else{
                $('input[name="xCaptcha"]').find('.invalid-feedback').remove();
                $('input[name="xCaptcha"]').closest('.form-group').append(errorMsg['xCaptcha']);
                errorStatus = false;
            }
            if($('input[name="xAgree"]').is(':checked')){
                $('input[name="xAgree"]').closest('.form-group').find('.invalid-feedback').remove();
                errorStatus = true;
            }else{
                $('input[name="xAgree"]').find('.invalid-feedback').remove();
                $('input[name="xAgree"]').closest('.form-group').append(errorMsg['xAgree']);
                errorStatus = false;
            }           
            return errorStatus;
        }
        $(document).on('keyup', 'input[name="xUsername"]',function(){
            var xusername = $(this).val();
            var regexUsername = /^([a-z0-9]).{6,19}$/;
            if(regexUsername.test(xusername)){
                $(this).closest('.form-group').find('.invalid-feedback').remove();
                    if($('#checkUsername').find('i').hasClass('text-danger')){
                        $(this).closest('.form-group').find('.invalid-feedback').remove();
                        $(this).closest('.form-group').append(errorMsg['xUsernameExist']);
                    }else{
                        $(this).closest('.form-group').find('.invalid-feedback').remove();
                    }
            }else{
                $(this).closest('.form-group').find('.invalid-feedback').remove();
                $(this).closest('.form-group').append(errorMsg['xUsername']);
            }
        });
        $(document).on('blur', 'input[name="xUsername"]',function(){
            if($('#checkUsername').find('i').hasClass('text-danger')){
                $(this).closest('.form-group').find('.invalid-feedback').remove();
                $(this).closest('.form-group').append(errorMsg['xUsernameExist']);
            }else{
                $(this).closest('.form-group').find('.invalid-feedback').remove();
            }
        });
        $(document).on('keyup', 'input[name="xPassword"]',function(){
            var xPassword = $(this).val();
            var regexPassWord = /^(?=.*?[a-zA-Z])(?=.*?[0-9]).{8,}$/;
            if(regexPassWord.test(xPassword)){
                 $(this).closest('.form-group').find('.invalid-feedback').remove();
            }else{
                $(this).closest('.form-group').find('.invalid-feedback').remove();
                $(this).closest('.form-group').append(errorMsg['xPassword']);
            }
        });
        $(document).on('keyup', 'input[name="xPasswordConfirm"]',function(){
            var xPassword = $('input[name="xPassword"]').val();
            var xPasswordConfirm = $(this).val();
            if(xPasswordConfirm==xPassword && xPassword!=''){
                 $(this).closest('.form-group').find('.invalid-feedback').remove();
            }else{
                $(this).closest('.form-group').find('.invalid-feedback').remove();
                $(this).closest('.form-group').append(errorMsg['xPasswordConfirm']);
            }
        });
        $(document).on('keyup', 'input[name="xPhone"]',function(){
            var xPhone = $(this).val();
            var regexPhone = /^([0-9]).{8,10}$/;
            if(regexPhone.test(xPhone) ){
                 $(this).closest('.form-group').find('.invalid-feedback').remove();
            }else{
                $(this).closest('.form-group').find('.invalid-feedback').remove();
                $(this).closest('.form-group').append(errorMsg['xPhone']);
            }
        });
        $(document).on('keyup', 'input[name="xName"]',function(){
            var xName = $(this).val();
            var regexName = /^([a-zA-Z\s])+$/;
            if(regexName.test(xName) ){
                 $(this).closest('.form-group').find('.invalid-feedback').remove();
            }else{
                $(this).closest('.form-group').find('.invalid-feedback').remove();
                $(this).closest('.form-group').append(errorMsg['xName']);
            }
        });
        function checkEamil(email){ 
             var regexEmail =/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))){2,6}$/i;
             return regexEmail.test(email); 
        }
        $(document).on('keyup', 'input[name="xEmail"]',function(){
            var xEmail = $(this).val();
            var emailStatus = checkEamil(xEmail);
            if(emailStatus){
                 $(this).closest('.form-group').find('.invalid-feedback').remove();
            }else{
                $(this).closest('.form-group').find('.invalid-feedback').remove();
                $(this).closest('.form-group').append(errorMsg['xEmail']);
            }
        });
        $('.checkbox-custom').click(function(){
            if($('input[name="xAgree"]').is(':checked')){
                $('input[name="xAgree"]').closest('.form-group').find('.invalid-feedback').remove();
                errorStatus = true;
            }else{
                $('input[name="xAgree"]').find('.invalid-feedback').remove();
                $('input[name="xAgree"]').closest('.form-group').append(errorMsg['xAgree']);
                errorStatus = false;
            } 
        });
        
        $('form[name="frmRegister"] button[type="submit"]').click(function(){
            var checkInput = checkValidate();
            if(checkInput){
                return true;
            }else{
                return false;
            }
        });
    })();
})();