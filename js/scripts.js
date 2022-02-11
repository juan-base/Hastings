$(function() {
  $(".newsletter-submit-field").click(function(){
    const rel = $(this).attr("rel");
    const email = $("#newsletter-email-" + rel).val()
    if (email) {
      $("#iframe_wrapper").show(300);
      window.frames.newsletter_iframe.contentWindow.submitEmail(email);
    }
  })
})
