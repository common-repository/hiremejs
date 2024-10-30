jQuery( function ( $ ) {
    function tellHim( figlet ) {
        if (figlet) {
            console.log(figlet);
        }
        if (hmj_values.text !== "") {
            console.log(hmj_values.text);
        }
    }

    window.addEventListener( 'devtoolschange', function ( e ) {
        if ( hmj_values.greetings !== "" ) {
            Figlet.write( hmj_values.greetings, hmj_values.font, function ( str ) {
                tellHim(str);
            } );
        } else {
            tellHim(false);
        }
    } );
} );