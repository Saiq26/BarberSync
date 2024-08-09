// script.js

function redirectToRole(action, role) {
    const urls = {
        'login': {
            'barber': 'login-barber.php',
            'owner': 'login-owner.php',
            'admin': 'login-admin.php',
            'customer': 'login-customer.php'
        },
        'register': {
            'barber': 'register-barber.php',
            'owner': 'register-owner.php',
            'admin': 'register-admin.php',
            'customer': 'register-customer.php'
        }
    };

    if (urls[action] && urls[action][role]) {
        window.location.href = urls[action][role];
    }
}
