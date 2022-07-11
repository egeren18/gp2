<main>

    <!-- Page -->
    <div class="container">

        <!-- Breadcrumb -->
        <div class="row">
            <div class="col s12 m-b-5">
                <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                <a href="../c/project.php?m=list" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                <a href="#!" class="breadcrumb hide-on-med-and-down">Actividades</a>
                <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                    <i class="material-icons blue-text">help</i>
                </a>
                <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                    <i class="material-icons blue-text">forum</i>
                </a>
                <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                    <?php echo $_SESSION["userFullName"]; ?>
                </span>
            </div>
        </div>
        <!-- #END# Breadcrumb -->

        <!-- Content -->
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12 m-t-10">
                                <span class="breadcrumb p-l-10">Cliente: <?php echo $clientName; ?></span>
                                <a href="javascript: history.go(-1)" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-grey-text">cancel</i>
                                </a>
                            </div>
                        </div>
                        <form id="form_validation" action="#!ac.php?m=qADb" method="post">
                            <div class="m-l-10 m-r-10">
                                <div class="row">
                                    <div class="col s12 m6 l8 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                                <tr>
                                                    <td>Supervisado por:</td>
                                                    <td>
                                                        <?php
                                                        while ($r_reviewer = mysqli_fetch_array($reviewer)) {
                                                            $separado = explode(',', $teamReviewer);
                                                            $acReviewerId = $r_reviewer["userId"];
                                                            $acReviewerName = $r_reviewer["userName"] . ' ' . $r_reviewer["userSurname"];
                                                            foreach($separado as $m) {
                                                                $reviewers = $m == $acReviewerId ? $acReviewerName . ', ' : '';
                                                                echo $reviewers;
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Realizado por:</td>
                                                    <td>
                                                        <?php
                                                        while ($r_doer = mysqli_fetch_array($doer)) {
                                                            $separado = explode(',', $teamDoer);
                                                            $acDoerId = $r_doer["userId"];
                                                            $acDoerName = $r_doer["userName"] . ' ' . $r_doer["userSurname"];
                                                            foreach($separado as $m) {
                                                                $doers = $m == $acDoerId ? $acDoerName . ', ' : '';
                                                                echo $doers;
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Naturaleza del Servicio:</td>
                                                    <td><?php echo $natureName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo $serviceName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Período del Proyecto:</td>
                                                    <td>
                                                        Desde <span class="p-l-5 p-r-5"><?php echo $dateStart; ?></span>
                                                        Hasta <span class="p-l-5"><?php echo $dateExpire; ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l4 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                                <tr>
                                                    <td>Completado por:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Revisado por:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Estatus:</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t--20">
                                        <div class="card-panel white-text blue-grey darken-2">
                                            <?php
                                            if ($p == 'p') {
                                                echo $questionP;
                                            }
                                            elseif ($p == 's') {
                                                echo $questionS;
                                            }
                                            elseif ($p == 'e') {
                                                echo $questionE;
                                            }
                                            elseif ($p == 'c') {
                                                echo $questionC;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t--10 m-b-10">
                                        <a href="#rule" class="modal-trigger btn btn-small blue-grey">
                                            Norma(s):
                                            <?php
                                            if ($p == 'p') {
                                                echo $ruleP;
                                            } elseif ($p == 's') {
                                                echo $ruleS;
                                            } elseif ($p == 'e') {
                                                echo $ruleE;
                                            } elseif ($p == 'c') {
                                                echo $ruleC;
                                            }
                                            ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="m-l-10 m-t-10 m-r-10">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <ul class="collapsible blue-grey-text text-darken-2">
<!-- -->
<!-- -->
<!-- -->
<!-- -->

<li>
    <ul class="stepper parallel vertical">
      <li class="step active">
        <div class="step-title waves-effect waves-dark">Step 1</div>
        <div class="step-content">
          <div class="row">
            <div class='form-field col s12'>
              <p>Step with custom validation</p>
              <span>For this step we want to have a custom validator that checks if if at least one checkbox is checked</span>
              <p>
                  <input type="text" id="textfield2" name="textfield2" class=""/>
              </p>
            </div>
          </div>
          <div class="step-actions">
              <button class="waves-effect waves-dark btn next-step" data-validator="validateStepOne">CONTINUE</button>
            <button type="button" class="waves-effect waves-dark btn-flat previous-step">BACK</button>
          </div>
        </div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Step 2</div>
        <div class="step-content">
          <div class="row">
            <div class='form-field col s12'>
              <p>Step with no custom validation</p>
              <div class="input-field col s12">
                <input type="text" name="textfield" class="required validate"/>
                <label for="textfield">Random textfield</label>
              </div>
            </div>
          </div>
          <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
          </div>
        </div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Step 3</div>
        <div class="step-content">
          <div class="row">
            <div class='form-field'>
              <p>Step with feedback and custom validation</p>
              <p>
              <input type="text" id="textfield2" name="textfield2" class=""/>
              </p>
            </div>
            <div class="input-field col s12">
              <input type="text" id="textfield2" name="textfield2" class="required validate"/>
              <label for="textfield2">This field should contain the word materialize</label>
            </div>
          </div>
          <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step" data-feedback="nextStepThreeHandler" data-validator="validateStepThree">SUBMIT</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
          </div>
        </div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Step 4</div>
        <div class="step-content">
          <div class="row">
            <div class='form-field'>
              <p>Submit phase</p>
            </div>
          </div>
          <div class="step-actions">
            <button type="submit" class="waves-effect waves-dark btn next-step">SUBMIT</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
          </div>
        </div>
      </li>
    </ul>
      
      <script>
      $(document).ready(function() {
  $('.stepper').activateStepper();
})

function validateStepOne() {
  // Extract the checked checkboxes from the first step
  if($('.step').first().find('input[type="checkbox"]:checked').length)
    return true;
  return false;
}

function validateStepThree() {
  var validation = true;
  if($('.step:nth-child(3) input[type="text"]').val().indexOf('materialize') === -1)
    validation = false;
  if($('.step:nth-child(3) input[type="checkbox"]:checked').length === 0)
    validation = false;
  return validation;
  
}

function nextStepThreeHandler() {
  if(validateStepThree())
    $('.stepper').nextStep();
  else {
    $('.stepper ').destroyFeedback();              $('.stepper').getStep($('.stepper').getActiveStep()).addClass('wrong');
  }
}




/* Materializecss Stepper - By Kinark 2016
// https://github.com/Kinark/Materialize-stepper
// JS v2.1.3
*/

var validation = $.isFunction($.fn.valid) ? 1 : 0;

$.fn.isValid  = function() {
   if(validation){
      return this.valid();
   } else {
      return true;
   }
};

if (validation) {
   $.validator.setDefaults({
      errorClass: 'invalid',
      validClass: "valid",
      errorPlacement: function (error, element) {
         if(element.is(':radio') || element.is(':checkbox')) {
            error.insertBefore($(element).parent());
         } else {
            error.insertAfter(element); // default error placement.
            // element.closest('label').data('error', error);
            // element.next().attr('data-error', error);
         }
      },
      success: function (element) {
         if(!$(element).closest('li').find('label.invalid:not(:empty)').length){
            $(element).closest('li').removeClass('wrong');
         }
      }
   });

   // When parallel stepper is defined we need to consider invisible and
   // hidden fields
   if($('.stepper.parallel').length) $.validator.setDefaults({ignore:''});
}

$.fn.getActiveStep  = function() {
   var active = this.find('.step.active');
   return $(this.children('.step:visible')).index($(active))+1;
};

$.fn.activateStep  = function(callback) {
   if($(this).hasClass('step')) return;
   var stepper = $(this).closest('ul.stepper');
   stepper.find('>li').removeAttr("data-last");
   if(window.innerWidth < 993 || !stepper.hasClass('horizontal')) {
      $(this).addClass("step").stop().slideDown(400, function(){
         $(this).css({'height':'auto', 'margin-bottom': '','display': 'inherit'});if(callback)callback();
         stepper.find('>li.step').last().attr('data-last', 'true');
      });
   } else {
      $(this).addClass("step").stop().css({'width':'0%','display': 'inherit'}).animate({width:'100%'}, 400, function(){
         $(this).css({'height':'auto', 'margin-bottom': '','display': 'inherit'});if(callback)callback();
         stepper.find('>li.step').last().attr('data-last', 'true');
      });
   }
};

$.fn.deactivateStep  = function(callback) {
   if(!$(this).hasClass('step')) return;
   var stepper = $(this).closest('ul.stepper');
   stepper.find('>li').removeAttr("data-last");
   if(window.innerWidth < 993 || !stepper.hasClass('horizontal')) {
      $(this).stop().css({'transition':'none', '-webkit-transition':'margin-bottom none'}).slideUp(400, function(){
         $(this).removeClass("step").css({'height':'auto','margin-bottom':'','transition':'margin-bottom .4s','-webkit-transition':'margin-bottom .4s'});
         if(callback)callback();
         stepper.find('>li').removeAttr("data-last");
         stepper.find('>li.step').last().attr('data-last', 'true');
      });
   } else {
      $(this).stop().animate({width:'0%'}, 400, function(){
         $(this).removeClass("step").hide().css({'height':'auto', 'margin-bottom': '','display': 'none', 'width': ''});
         if(callback)callback();
         stepper.find('>li.step').last().attr('data-last', 'true');
      });
   }
};

$.fn.showError  = function(error) {
   if(validation) {
      var name = this.attr('name');
      var form = this.closest('form');
      var obj = {};
      obj[name] = error;
      form.validate().showErrors(obj);
      this.closest('li').addClass('wrong');
   } else {
      this.removeClass('valid').addClass('invalid');
      this.next().attr('data-error', error);
   }
};

$.fn.activateFeedback  = function() {
   var active = this.find('.step.active:not(.feedbacking)').addClass('feedbacking').find('.step-content');
   active.prepend('<div class="wait-feedback"> <div class="preloader-wrapper active"> <div class="spinner-layer spinner-blue"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div><div class="spinner-layer spinner-red"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div><div class="spinner-layer spinner-yellow"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div><div class="spinner-layer spinner-green"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div></div></div>');
};

$.fn.destroyFeedback  = function() {
   var active = this.find('.step.active.feedbacking');
   if(active) {
      active.removeClass('feedbacking');
      active.find('.wait-feedback').remove();
   }
   return true;
};

$.fn.resetStepper  = function(step) {
   if(!step) step = 1;
   var form = $(this).closest('form');
   $(form)[0].reset();
   Materialize.updateTextFields();
   return $(this).openStep(step);
};

$.fn.submitStepper  = function(step) {
   var form = this.closest('form');
   if(form.isValid()) {
      form.submit();
   }
};

$.fn.nextStep = function(callback, activefb, e) {
   var stepper = this;
   var settings = $(stepper).data('settings');
   var form = this.closest('form');
   var active = this.find('.step.active');
   var next = $(this.children('.step:visible')).index($(active))+2;
   var feedback = active.find('.next-step').length > 1 ? (e ? $(e.target).data("feedback") : undefined) : active.find('.next-step').data("feedback");
   // If the stepper is parallel, we want to validate the input of the current active step. Not all elements.
   if((settings.parallel && $(active).validateStep()) || (!settings.parallel && form.isValid())) {
      if(feedback && activefb) {
         if(settings.showFeedbackLoader) stepper.activateFeedback();
         return window[feedback].call();
      }
      active.removeClass('wrong').addClass('done');
      this.openStep(next, callback);
      return this.trigger('nextstep');
   } else {
      return active.removeClass('done').addClass('wrong');
   }
};

$.fn.prevStep = function(callback) {
   var active = this.find('.step.active');
   if(active.hasClass('feedbacking')) return;
   var prev = $(this.children('.step:visible')).index($(active));
   active.removeClass('wrong');
   this.openStep(prev, callback);
   return this.trigger('prevstep');
};

$.fn.openStep = function(step, callback) {
   var settings = $(this).closest('ul.stepper').data('settings');
   var $this = this;
   var step_num = step - 1;
   step = this.find('.step:visible:eq('+step_num+')');
   if(step.hasClass('active')) return;
   var active = this.find('.step.active');
   var next;
   var prev_active = next = $(this.children('.step:visible')).index($(active));
   var order = step_num > prev_active ? 1 : 0;
   if(active.hasClass('feedbacking')) $this.destroyFeedback();
   active.closeAction(order);
   step.openAction(order, function(){
      if(settings.autoFocusInput) step.find('input:enabled:visible:first').focus();
      $this.trigger('stepchange').trigger('step'+(step_num+1));
      if(step.data('event')) $this.trigger(step.data('event'));
      if(callback)callback();
   });
};

$.fn.closeAction = function(order, callback) {
   var closable = this.removeClass('active').find('.step-content');
   if(window.innerWidth < 993 || !this.closest('ul').hasClass('horizontal')) {
      closable.stop().slideUp(300,"easeOutQuad", callback);
   } else {
      if(order==1) {
         closable.animate({left: '-100%'},function(){closable.css({display: 'none', left: '0%'}, callback);});
      } else {
         closable.animate({left: '100%'},function(){closable.css({display: 'none', left: '0%'}, callback);});
      }
   }
};

$.fn.openAction = function(order, callback) {
   var openable = this.removeClass('done').addClass('active').find('.step-content');
   if(window.innerWidth < 993 || !this.closest('ul').hasClass('horizontal')) {
      openable.slideDown(300,"easeOutQuad", callback);
   } else {
      if(order==1) {
         openable.css({left: '100%', display: 'block'}).animate({left: '0%'}, callback);
      } else {
         openable.css({left: '-100%', display: 'block'}).animate({left: '0%'}, callback);
      }
   }
};

$.fn.activateStepper = function(options) {
   var settings = $.extend({
      linearStepsNavigation: true,
      autoFocusInput: true,
      showFeedbackLoader: true,
      autoFormCreation: true,
      parallel: false // By default we don't assume the stepper is parallel
   }, options);
   $(document).on('click', function(e){
      if(!$(e.target).parents(".stepper").length){
         $('.stepper.focused').removeClass('focused');
      }
   });

   $(this).each(function(){
      var $stepper = $(this);
      if(!$stepper.parents("form").length && settings.autoFormCreation) {
         var method = $stepper.data('method');
         var action = $stepper.data('action');
         var method = (method ? method : "GET");
         action = (action ? action : "?");
         $stepper.wrap( '<form action="'+action+'" method="'+method+'"></form>' );
      }

      $stepper.data('settings', {linearStepsNavigation: settings.linearStepsNavigation,autoFocusInput: settings.autoFocusInput,showFeedbackLoader:settings.showFeedbackLoader, parallel:$stepper.hasClass('parallel')});
      $stepper.find('li.step.active').openAction(1);
      $stepper.find('>li').removeAttr("data-last");
      $stepper.find('>li.step').last().attr('data-last', 'true');

      $stepper.on("click", '.step:not(.active)', function () {
         var object = $($stepper.children('.step:visible')).index($(this));
         if($stepper.data('settings').parallel && validation) { // Invoke parallel stepper behaviour
            $(this).addClass('temp-active');
            $stepper.validatePreviousSteps()
            $stepper.openStep(object + 1);
            $(this).removeClass('temp-active');
         } else if(!$stepper.hasClass('linear')) {
            $stepper.openStep(object+1);
         } else if(settings.linearStepsNavigation) {
            var active = $stepper.find('.step.active');
            if($($stepper.children('.step:visible')).index($(active))+1 == object) {
               $stepper.nextStep(undefined, true, undefined);
            } else if ($($stepper.children('.step:visible')).index($(active))-1 == object) {
               $stepper.prevStep(undefined);
            }
         }
      }).on("click", '.next-step', function(e) {
         e.preventDefault();
         $stepper.nextStep(undefined, true, e);
      }).on("click", '.previous-step', function(e) {
         e.preventDefault();
         $stepper.prevStep(undefined);
      }).on("click", "button:submit:not(.next-step, .previous-step)", function (e) {
         e.preventDefault();
         feedback = e ? $(e.target).data("feedback") : undefined;
         var form = $stepper.closest('form');
         if(form.isValid()) {
            if(feedback) {
               stepper.activateFeedback();
               return window[feedback].call();
            }
            form.submit();
         }
      }).on("click", function () {
         $('.stepper.focused').removeClass('focused');
         $(this).addClass('focused');
      });
   });
};

/**
 * Return the step element on given index.
 *
 * @param step, index of the step to be returned
 * @returns {*}, the step requested
 */
$.fn.getStep = function(step) {
    var settings = $(this).closest('ul.stepper').data('settings');
    var $this = this;
    var step_num = step - 1;
    step = this.find('.step:visible:eq('+step_num+')');
    return step;
};

/**
 * Run validation over all previous steps from the steps this
 * function is called on.
 */
$.fn.validatePreviousSteps = function() {
    var active = $(this).find('.step.temp-active');
    var index = $(this.children('.step')).index($(active));
    // We assume that the validator is set to ignore nothing.
    $(this.children('.step')).each(function(i) {
        if (i >= index) {
            $(this).removeClass('wrong done');
        } else {
            $(this).validateStep();
        }
    });
};

/**
 * Validate the step that this function is called on.
 */
$.fn.validateStep = function() {
    var stepper = this.closest('ul.stepper');
    var form = this.closest('form');
    var step = $(this);
    // Retrieve the custom validator for that step if exists.
    var validator = step.find('.next-step').data("validator");
    if(this.validateStepInput()) { // If initial base validation succeeded go on
      if(validator) { // If a custom validator is given also call that validator
         if (window[validator].call()) {
             step.removeClass('wrong').addClass('done');
             return true;
         }
         else {
             step.removeClass('done').addClass('wrong');
             return false;
         }
      }
      step.removeClass('wrong').addClass('done');
      return true;
    } else {
      step.removeClass('done').addClass('wrong');
      return false;
    }
};

/**
 * Uses the validation variable set by the stepper constructor
 * to run standard validation on the current step.
 * @returns {boolean}
 */
$.fn.validateStepInput = function() {
    var valid = true;
    if (validation) {
        // Find all input fields dat need validation in current step.
        $(this).find('input.validate').each(function() {
            if (!$(this).valid()) {
                valid = false;
                return false;
            }
        });
    }
    return valid;
};
      </script>
      
</li>


<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Información de la Cuenta y Objetivo de la Prueba
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <div class="row">
            <div class="col m6 l3">
                Partida del estado financiero
            </div>
            <div class="col m6 l9">
                <input type="text" class="form-control" name="userFirstName" >
            </div>
        </div>
        <div class="row">
            <div class="col m6 l3">
                Fecha y período de la prueba
            </div>
            <div class="col m6 l9">
                <input type="text" class="form-control" name="userFirstName" >
            </div>
        </div>
        <div class="row">
            <div class="col m6 l3">
                Importancia relativa General
            </div>
            <div class="col m6 l9">
                <input class="form-control" style="text-align: right" type="text" id="a" value="0"/>
            </div>
        </div>
        <div class="row">
            <div class="col m6 l3">
                Importancia relativa Planificacion
            </div>
            <div class="col m6 l9">
                <input class="form-control" style="text-align: right" type="text" id="a" value="0"/>
            </div>
        </div>
        <div class="row">
            <div class="col m6 l3">
                Nivel de registro SUD
            </div>
            <div class="col m6 l9">
                <input class="form-control" style="text-align: right" type="text" id="a" value="0"/>
            </div>
        </div>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Aserciones a los Estados Financieros
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <div class="row">
            <div class="col m6">
                <label>
                    <input type="checkbox" />
                    <span>C</span>
                </label>
            </div>
            <div class="col m6">
                <label>
                    <input type="checkbox" />
                    <span>A</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col m6">
                <label>
                    <input type="checkbox" />
                    <span>E/O</span>
                </label>
            </div>
            <div class="col m6">
                <label>
                    <input type="checkbox" />
                    <span>CO</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col m6">
                <label>
                    <input type="checkbox" />
                    <span>RO</span>
                </label>
            </div>
            <div class="col m6">
                <label>
                    <input type="checkbox" />
                    <span>VA</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col m6">
                <label>
                    <input type="checkbox" />
                    <span>PD</span>
                </label>
            </div>
        </div>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Definir Población
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <div class="row">
            <div class="col s12">
                <div class="input-field">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Definir la Población (informe utilizado)</label>
                </div>
            </div>
            <div class="col s12 m-t--10">
                <div class="input-field">
                    <input id="first_name2" type="text" class="validate">
                    <label class="active" for="first_name2">Fecha del informe</label>
                </div>
            </div>
            <div class="col s12">
                <div class="input-field">
                    <input style="text-align: right" class="number" type="text" id="x" onkeyup="calcular()" />
                    <label class="active" for="x">Valor total de la cuenta (población)</label>
                </div>
            </div>
            <div class="col s12">
                <div class="input-field">
                    <input style="text-align: right" type="text" id="y" onkeyup="calcular()" />
                    <label class="active" for="y">Nº de partidas</label>
                </div>
            </div>
            <div class="col s12">
                <div class="input-field">
                    <textarea id="textarea4" class="materialize-textarea"></textarea>
                    <label for="textarea4">Procedimiento realizado:</label>
                </div>
            </div>
            <div class="col s12">
                <div class="input-field">
                    <textarea id="textarea5" class="materialize-textarea"></textarea>
                    <label for="textarea5">Documentar excepciones:</label>
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Definición de Error, espectativa
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="r2" class="ckeditor"></textarea>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Método de Selección
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <table class="table table-bordered">
            <tr>
                <td class="blue-grey-lighten-4 align-center">Base de Selección</td>
                <td class="blue-grey-lighten-4 align-center">Nº Partidas</td>
                <td class="blue-grey-lighten-4 align-center">Monto</td>
                <td class="blue-grey-lighten-4 align-center">Cobertura</td>
            </tr>
            <tr>
                <td class="blue-grey-lighten-5 align-center">Por cobertura:</td>
                <td class="align-center"><input style="text-align: right" type="text" id="a" value="0" onkeyup="calcular()" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="b" value="0" onkeyup="calcular()" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="c" disabled="disabled" /></td>
            </tr>
            <tr>
                <td class="blue-grey-lighten-5 align-center">Por riesgo:</td>
                <td class="align-center"><input style="text-align: right" type="text" id="d" value="0" onkeyup="calcular()" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="e" value="0" onkeyup="calcular()" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="f" disabled="disabled" /></td>
            </tr>
            <tr>
                <td class="blue-grey-lighten-5 align-center">Por procedimientos impredecibles:</td>
                <td class="align-center"><input style="text-align: right" type="text" id="g" value="0" onkeyup="calcular()" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="h" value="0" onkeyup="calcular()" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="i" disabled="disabled" /></td>
            </tr>
            <tr>
                <td class="blue-grey-lighten-5 align-center">Monto probado (total muestra):</td>
                <td class="align-center"><input style="text-align: right" type="text" id="j" disabled="disabled" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="k" disabled="disabled" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="l" disabled="disabled" /></td>
            </tr>   
            <tr>
                <td class="blue-grey-lighten-5 align-center">Monto no probado:</td>
                <td class="align-center"><input style="text-align: right" type="text" id="m" disabled="disabled" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="n" disabled="disabled" /></td>
                <td class="align-center"><input style="text-align: right" type="text" id="o" disabled="disabled" /></td>
            </tr>
            <tr>
                <td class="blue-grey-lighten-5 align-center">Agregar base de selección:</td>
                <td colspan="3">
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="" rows="1" class="form-control no-resize auto-growth"></textarea>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Documentar el Resultado de la Prueba realizada
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="r2" class="ckeditor"></textarea>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Evaluación de los Resultados
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="r2" class="ckeditor"></textarea>
    </div>
</li>

<script>
function calcular() {
    //
    x = eval(document.getElementById('x').value);
    y = eval(document.getElementById('y').value);
    //
    a = eval(document.getElementById('a').value);
    b = eval(document.getElementById('b').value);
    d = eval(document.getElementById('d').value);
    e = eval(document.getElementById('e').value);
    g = eval(document.getElementById('g').value);
    h = eval(document.getElementById('h').value);
    //
    c = (b / x * 100).toFixed(2);
    f = (e / x * 100).toFixed(2);
    i = (h / x * 100).toFixed(2);
    j = a + d + g;
    if( j > y) { alert("Error: El número de partidas probadas es superior a la población."); }
    k = b + e + h;
    if( k > x) { alert("Error: El monto probado es superior a la población."); }
    l = ((b / x * 100) + (e / x * 100) + (h / x * 100)).toFixed(2);
    m = y - j;
    n = x - k;
    o = (100 - l).toFixed(2);
    //
    document.getElementById('c').value = c + ' % ';
    document.getElementById('f').value = f + ' % ';
    document.getElementById('i').value = i + ' % ';
    document.getElementById('j').value = j;
    document.getElementById('k').value = k;
    document.getElementById('l').value = l + ' % ';
    document.getElementById('m').value = m;
    document.getElementById('n').value = n;
    document.getElementById('o').value = o + ' % ';
}
</script>
<!-- -->
<!-- -->
<!-- -->
<!-- -->
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                                        Otras consideraciones:
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <ul class="collapsible blue-grey-text text-darken-2">
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Debilidades de Control Interno
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    <textarea name="r2" class="ckeditor"></textarea>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Carta de Gerencia
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    <textarea name="r2" class="ckeditor"></textarea>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Situaciones Críticas
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    <textarea name="r2" class="ckeditor"></textarea>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Asientos de Ajustes
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    <textarea name="r2" class="ckeditor"></textarea>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m-t-20">
                                                            <div class="file-field input-field">
                                                                <div class="btn blue-grey">
                                                                    <i class="material-icons">attach_file</i>
                                                                    <input type="file" multiple>
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" type="text" placeholder="Adjuntar uno &oacute; m&aacute;s archivos">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" class="validate filled-in" required="" />
                                                                <span>Completado, listo para ser revisado!</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" class="validate filled-in" required="" />
                                                                <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m-t-20 m-b-10">
                                                            <a href="javascript: history.go(-1)" class="btn red waves-light">
                                                                <i class="material-icons">cancel</i>
                                                            </a>
                                                            <button type="submit" class="btn blue waves-effect">
                                                                <i class="material-icons">save</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col s12 m-t-10">
                                <span class="blue-grey-text font-14 left p-l-10">© 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versión: 1.0.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Content -->

    </div>
    <!-- #END# Page -->

</main>

<!-- Help -->
<div id="help" class="modal">
    <div class="modal-content">
        <p class="">Manual de Usuario</p>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="modal-footer">
        <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
    </div>
</div>
<!-- #END# Help -->

<!-- Rule -->
<div id="rule" class="modal">
    <div class="modal-content">
        <p class="">
            <?php
            if ($p == 'p') {
                echo $ruleDescriptionP;
            } elseif ($p == 's') {
                echo $ruleDescriptionS;
            } elseif ($p == 'e') {
                echo $ruleDescriptionE;
            } elseif ($p == 'c') {
                echo $ruleDescriptionC;
            }
            ?>
        </p>
    </div>
    <div class="modal-footer">
        <button class="modal-close waves-effect waves-light btn blue btn-small">Salir</button>
    </div>
</div>
<!-- #END# Rule -->

<!-- Ticket -->
<?php include '../v/support/modalAdd.php'; ?>
<!-- #END# Ticket -->
