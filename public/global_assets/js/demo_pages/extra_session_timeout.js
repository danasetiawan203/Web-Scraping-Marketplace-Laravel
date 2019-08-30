/* ------------------------------------------------------------------------------
*
*  # Idle timeout
*
*  Demo JS code for extra_idle_timeout.html page
*
* ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

    // Session timeout
    $.sessionTimeout({
        heading: 'h5',
        title: 'Session Timeout',
        message: 'Your session is about to expire. Do you want to stay connected?',
        ignoreUserActivity: true,
        warnAfter: 10000,
        redirAfter: 30000,
        keepAliveUrl: '/',
        redirUrl: 'login_unlock.html',
        logoutUrl: 'login_advanced.html'
    });
    
});
