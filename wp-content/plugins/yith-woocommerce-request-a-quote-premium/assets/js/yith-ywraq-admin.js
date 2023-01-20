/**
 * Javascript functions to administrator pane
 *
 * @package YITH Woocommerce Request A Quote
 * @since   1.0.0
 * @version 1.0.0
 * @author  YITH
 */
jQuery(function($) {
  'use strict';
  var select = $(document).find('.yith-ywraq-chosen'),
      is_valid_email = function(email) {
        var pattern = new RegExp(/^[^\s@]+@[^\s@]+\.[^\s@]+$/i);
        return pattern.test(email);
      },
      blockParams = {
        message: null,
        overlayCSS: {background: '#fff', opacity: 0.7},
        ignoreIfBlocked: true,
      };

  $('#_ywraq_safe_submit_field').val('');

  select.each(function() {
    if ($.fn.chosen !== undefined) {
      $(this).chosen({
        width: '350px',
        disable_search: true,
        multiple: true,
      });
    }
  });

  //Contact form selection
  var yit_contact_form = $('select.yit-contact-form').parent().parent(),
      contact_form_7 = $('select.contact-form-7').parent().parent(),
      gravity_forms = $('select.gravity-forms').parent().parent();

  $('select#ywraq_inquiry_form_type').change(function() {

    var option = $('option:selected', this).val();

    switch (option) {
      case 'yit-contact-form':
        yit_contact_form.show();
        contact_form_7.hide();
        gravity_forms.hide();
        break;
      case 'contact-form-7':
        yit_contact_form.hide();
        gravity_forms.hide();
        contact_form_7.show();
        break;
      case 'gravity-forms':
        yit_contact_form.hide();
        contact_form_7.hide();
        gravity_forms.show();
        break;
      default:
        yit_contact_form.hide();
        contact_form_7.hide();
        gravity_forms.hide();
    }

  }).change();

  //Order functions
  $('#ywraq_submit_button').on('click', function(e) {
    e.preventDefault();
    $('#_ywraq_safe_submit_field').val('send_quote');

    $(this).closest('form').submit();
  });

  //align the button Add a new Quote inside order list page

  if ($('.ywraq-add-new-quote-button').length > 0) {
    var $button = $('.ywraq-add-new-quote-button');
    $('.wp-header-end').before($button);
  }

  //Order functions
  $(document).find('#ywraq_pdf_button').on('click', function(e) {
    e.preventDefault();
    var $t = $(this),
        mainForm = $t.closest('form');

    $('#_ywraq_safe_submit_field').val('create_preview_pdf');
    $.post(document.location.href, mainForm.serialize()).done(function(result) {
      if (result !== '') {
        var c = $('<div></div>').html(result),
            pdfButton = c.find('#ywraq_pdf_button'),
            pdf = pdfButton.data('pdf');
      }
      if (pdf) {
        window.open(
            pdf, '_blank');
      }
    });

    $('#_ywraq_safe_submit_field').val('');
  });

  $('#ywraq_check_email').on('click', function(e) {
    e.preventDefault();
    var $t = $(this),
        email = $('#_ywraq_email_preview_email').val(),
        mainForm = $t.closest('form');

    if (is_valid_email(email)) {
      $('#_ywraq_safe_submit_field').val('send_email_preview');
      $t.block(blockParams);
      $.post(document.location.href, mainForm.serialize()).done(function() {
        $t.unblock();
        $('.ywraq-email-success').show();
        setTimeout(function() {
          $('.ywraq-email-success').hide('slow');
        }, 3000);
      });
    } else {
      $('.ywraq-email-error').show();
    }
  });

  $('#_ywraq_email_preview_email').on('change click', function() {
    var email = $(this).val();
    if (is_valid_email(email)) {
      $('.ywraq-email-error').hide();
    } else {
      $('.ywraq-email-error').show();
    }
  });

  //datepicker
  if ($('#_ywcm_request_expire').length > 0) {
    $('#_ywcm_request_expire').each(function() {
      $.datepicker.setDefaults({
        gotoCurrent: true,
        dateFormat: 'yy-mm-dd',
      });
      $(this).datepicker('option', 'minDate', '1d');

    });
  }

  //Metabox Pay Quote Now
  $(document).on('change', $('#_ywraq_deposit_enable'), function() {
    check_deposit_enabled();
  });

  function check_deposit_enabled() {
    var value = $('#_ywraq_deposit_enable').val(),
        pay_now = $('#_ywraq_pay_quote_now').val(),
        $rate = $('#_ywraq_deposit_rate').closest('.the-metabox');
    if (pay_now == 0 || pay_now == 'no') {
      if (value == 0 || value == 'no') {
        $rate.hide();
      } else {
        $rate.show();
      }
    }

  }

  check_deposit_enabled();

  $('#ywraq_pdf_file').attr('disabled', 'disabled');

  /**
   * Editor integration forms
   * @type {*|jQuery}
   */
  var link = $(document).find('.ywraq_form_link'),
      getFormEditorLink = function getFormEditorLink(formType, value) {

        if (value === null || value == '') {
          return '';
        }

        if (formType === 'contact-form-7') {
          return '&post=' + value + '&action=edit';
        }

        if (formType === 'gravity-forms') {
          return '&id=' + value;
        }

        if (formType === 'ninja-forms') {
          return '&form_id=' + value;
        }

        if (formType === 'wpforms') {
          return '&view=fields&form_id=' + value;
        }

      };

  link.each(function() {
    var $t = $(this),
        select = $t.closest('.forminp-select').find('select'),
        link = $t.attr('href'),
        formType = $t.data('type'),
        value = select.val();

    $t.attr('href', link + getFormEditorLink(formType, value));

    select.on('change', function() {
      var newvalue = $(this).val();
      $t.attr('href', link + getFormEditorLink(formType, newvalue));
    });
  });

  /*FORM SETTINGS FIELD*/

  var tr_view_details = $('#ywraq_message_to_view_details').closest('tr'),
      tr_view_thank_you_page = $('#ywraq_thank_you_page').closest('tr');

  $(document).
      on('change',
          'input[name="ywraq_how_show_after_sent_the_request"]:checked',
          function(e) {

            var value = $(this).val();

            if ('simple_message' !== value) {
              tr_view_details.hide();

            } else {

              $('#ywraq_enable_link_details').trigger('change');

            }
            if ('thank_you_page' !== value) {
              tr_view_thank_you_page.hide();
            } else {

              tr_view_thank_you_page.show();

            }
          });

  $(document).
      find('input[name="ywraq_how_show_after_sent_the_request"]').
      trigger('change');

  var radio_checked = $(document).
      find('input[name="ywraq_how_show_after_sent_the_request"]:checked').
      val();

  if ('simple_message' !== radio_checked) {
    tr_view_details.hide();
  }

  $('.yith-plugin-fw.metaboxes-tab.yith-plugin-ui').
      find('[data-deps]').
      each(function() {

        var t = $(this),
            wrap = t.closest('.the-metabox'),
            deps = t.attr('data-deps').split(','),
            values = t.attr('data-deps_value').split(','),
            conditions = [];

        $.each(deps, function(i, dep) {
          $('#' + dep).on('change', function() {

            var value = this.value,
                check_values = '';

            // exclude radio if not checked
            if (this.type == 'radio' && !$(this).is(':checked')) {
              return;
            }

            if (this.type == 'checkbox') {
              value = $(this).is(':checked') ? 'yes' : 'no';
            }

            check_values = values[i] + ''; // force to string
            check_values = check_values.split('|');
            conditions[i] = $.inArray(value, check_values) !== -1;

            if ($.inArray(false, conditions) === -1) {
              wrap.fadeIn();
            } else {
              wrap.fadeOut();
            }

          }).change();
        });
      });

  $('.yith-plugins_page_yith_woocommerce_request_a_quote .form-table').
      find('[data-deps]').
      each(function() {

        var t = $(this),
            wrap = t.closest('tr'),
            deps = t.attr('data-deps').split(','),
            values = t.attr('data-deps_value').split(','),
            conditions = [];

        $.each(deps, function(i, dep) {
          $('[name="' + dep + '"]').on('change', function() {

            var value = this.value,
                check_values = '';

            // exclude radio if not checked
            if (this.type == 'radio' && !$(this).is(':checked')) {
              return;
            }

            if (this.type == 'checkbox') {
              value = $(this).is(':checked') ? 'yes' : 'no';
            }

            check_values = values[i] + ''; // force to string
            check_values = check_values.split('|');
            conditions[i] = $.inArray(value, check_values) !== -1;

            if ($.inArray(false, conditions) === -1) {
              wrap.fadeIn();
            } else {
              wrap.fadeOut();
            }

          }).change();
        });
      });

  $(document).
      on('change',
          '#ywraq_show_button_on_cart_page, #ywraq_show_button_on_checkout_page',
          function() {
            var labelRow = $('#ywraq_checkout_quote_button_label').
                    closest('tr'),
                cartP = $('#ywraq_show_button_on_cart_page'),
                checkoutP = $('#ywraq_show_button_on_checkout_page');

            if (cartP.is(':checked') || checkoutP.is(':checked')) {
              labelRow.fadeIn();
            } else {
              labelRow.fadeOut();
            }
          });

  $('#ywraq_show_button_on_cart_page').change();


  /**
   * Move the create page option near page select on Request a quote page options.
   */
  var createToPage = function() {
    var $single_select_page = $('.single_select_page'),
        $create_page = $('.ywraq-create-page'),
        $row_to_hide = $create_page.closest('tr');
    if ($single_select_page.length > 0) {
      $single_select_page.find('.description').before($create_page);
      $row_to_hide.hide();
    }
  };

  createToPage();

  /** Customer request editor **/
  $(document).on('click', '.yith-pencil.customer-request-editor', function() {
    var $t = $(this),
        $wrapper = $t.closest('.customer-request-field-wrapper');
    if ($wrapper.hasClass('edit')) {
      $wrapper.removeClass('edit');
      $wrapper.find('input, textarea').prop('readonly', true);
    } else {
      $wrapper.addClass('edit');
      $wrapper.find('input, textarea').prop('readonly', false);
    }
  });

  $('#ywraq_enable_expired_time').change(function() {

    if ($('#ywraq_expired_time').
        parent().
        parent().
        parent().
        hasClass('yith-disabled')) {
      $('#ywraq_expired_time_days').attr('disabled', 'disabled');
    } else {
      $('#ywraq_expired_time_days').attr('disabled', false);
    }

  }).change();

  if (yith_ywraq_admin.is_raq_panel) {
    $('#doaction, #post-query-submit').on('click', function(e) {
      e.preventDefault();
      window.onbeforeunload = null;

      var $t = $(this);
      $t.closest('form').submit();
    });
  }

  /** HIDE OR SHOW Quote PDF Template tab **/
  if ($('.hide-tab-templates').length > 0) {
    $('.hide-tab-templates').
        closest('li').
        find('.nav-subtab li:nth-child(3)').
        hide();
    $('.yith-nav-sub-tab-wrapper a:nth-child(3)').hide();
  }

  $(document).on('change', '#ywraq_pdf_template_to_use', function() {
    var currentValue = $(this).val();
    if ('default' === currentValue) {
      $('.yith-nav-sub-tab-wrapper a:nth-child(3)').hide();
    } else {
      $('.yith-nav-sub-tab-wrapper a:nth-child(3)').show();
    }
  });
  /** END **/

  if ($(document).
          find(
              '#woocommerce_ywraq_send_quote_reminder_accept_days_after_sent').length >
      0) {
    var field = $(document).
        find('#woocommerce_ywraq_send_quote_reminder_accept_days_after_sent');
    var info = field.data('description');
    field.after($('<span style="margin-left:10px; line-height: 30px"></span>').
        html(info));
  }

  if ($(document).
          find('#woocommerce_ywraq_send_quote_reminder_days_before_expire').length >
      0) {
    var field = $(document).
        find('#woocommerce_ywraq_send_quote_reminder_days_before_expire');
    var info = field.data('description');
    field.after($('<span style="margin-left:10px; line-height: 30px"></span>').
        html(info));
  }

  var scroll_to = function(element) {
    $('html,body').animate(
        {
          scrollTop: element.offset().top - 100,
        },
        'slow',
    );
  };

  if ($('.yith-plugins_page_yith_woocommerce_request_a_quote form').
      find('.yith-plugin-fw--required').length > 0) {
    $('#yith-plugin-fw-float-save-button').hide();
  }

  $('#main-save-button, #yith-plugin-fw-float-save-button').on( 'click', function(e) {
        var required_field = $('form').find('.yith-plugin-fw--required'),
            row = false,
            send = true;

        if (send) {
          required_field.each(
              function() {
                var current_row = $(this),
                    validate_span = $('<span class="validate-required">');
                validate_span.html(yith_ywraq_admin.required_label);
                if (current_row.is(':visible')) {
                  var select = current_row.find('select');
                  if (select.length) {
                    var selected = select.find(':selected');
                    if (selected.length === 0) {
                      send = false;
                      if (!row) {
                        row = current_row;
                      }
                      current_row.addClass('ywraq_required_check');
                      if (!current_row.find('.validate-required').length) {
                        current_row.find('.description').
                            before(validate_span);
                      }

                    }
                  } else {
                    var input = current_row.find('input');
                    if ('' === input.val()) {
                      send = false;
                      if (!row) {
                        row = current_row;
                      }
                      current_row.addClass('ywraq_required_check');
                      if (!current_row.find('.validate-required').length) {
                        current_row.find('.description').
                            before(validate_span);
                      }

                    }
                  }
                }
              },
          );
        }

        if (!send) {
          e.preventDefault();
          scroll_to(row);
          var selects = $(document).
                  find(
                      '.ywraq_required_check select'),
              inputs = $(document).
                  find(
                      '.ywraq_required_check input');

          selects.on(
              'select2:open',
              function(e) {
                $(this).
                    parents('.yith-plugin-fw--required').
                    removeClass('ywraq_required_check');
                $(this).
                    parents('.yith-plugin-fw--required').
                    find('.validate-required').
                    remove();
                e.stopImmediatePropagation();
              },
          );
          inputs.on('change', function(e) {
            e.stopImmediatePropagation();
            $(this).
                parents('.yith-plugin-fw--required').
                removeClass('ywraq_required_check');
            $(this).
                parents('.yith-plugin-fw--required').
                find('.validate-required').
                remove();
          });

        }else{
          return true;
        }
      });


  $( document ).on( 'click', '#ywraq-check-pdf .notice-dismiss', function() {
    var cname  = 'ywraq_check_template_pdf_notice',
        cvalue = 'yes';

    document.cookie = cname + "=" + cvalue + ";path=/";

    $('#ywraq-check-pdf').remove();

  });

});

