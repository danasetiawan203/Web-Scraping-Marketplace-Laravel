/* ------------------------------------------------------------------------------
*
*  # Session timeout
*
*  Demo JS code for extra_session_timeout.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

    // Idle timeout
    $.sessionTimeout({
        heading: 'h5',
        title: 'Idle Timeout',
        message: 'Your session is about to expire. Do you want to stay connected?',
        warnAfter: 5000,
        redirAfter: 15000,
        keepAliveUrl: '/',
        redirUrl: 'login_unlock.html',
        logoutUrl: 'login_advanced.html'
    });
    
});
