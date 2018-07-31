define(
   [
       'jquery',
       'ko',
       'uiComponent',
       'mage/validation'
   ],
   function ($, ko, Component) {
       "use strict";
       return Component.extend({
           defaults: {
  template: 'app\code\[Name_Space]\[Module]\view\frontend\web\template\creditcard.html'
           },
           /* Validation Form*/
            validateForm: function (form) {
                 return $(form).validation() && $(form).validation('isValid');
            },
submitForm: function(){
   if (!this.validateForm('#form-checkout-creditcard')) {
       return;
   }
   /*Your source code*/
}            
        });
   }
);
