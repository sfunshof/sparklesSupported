function cookie(){
	var msg='Sparkles Healthcare uses browser cookies to give you the best possible user experience ' ;
          msg=msg +  'To use Sparkles Healthcare services, you must agree to our privacy policies';
	window.cookieconsent.initialise({
    container: document.getElementById("content"),
    palette:{
      popup: {background: "#252e39"},
      button: {background: "#14a7d0"},
    },
    status: 'allow',
    theme: "classic",
    revokable:true,
	content: {
        header: 'Cookies used on the website!',
        message: msg,
        dismiss: 'Got it!',
        allow: 'Allow cookies',
        deny: 'Decline',
        link: 'Learn more',
        href: 'https://www.sparkleshealthcare.co.uk/miscellaneous/privacy',
        close: '&#x274c;',
        policy: 'Cookie Policy',
        target: '_blank',
    }
  })  
}

cookie();