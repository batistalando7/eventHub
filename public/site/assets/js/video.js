document.addEventListener("DOMContentLoaded", function () {
    const iframe = document.getElementById("video-frame");
    const videoSection = document.getElementById("video-section");
    let playerReady = false;

    // Esperar até que o YouTube sinalize que está pronto
    window.addEventListener("message", function (event) {
        if (event.data && typeof event.data === "string" && event.data.indexOf("onReady") !== -1) {
            playerReady = true;
        }
    });

    function sendCommand(command) {
        if (playerReady && iframe && iframe.contentWindow) {
            iframe.contentWindow.postMessage(
                JSON.stringify({ event: "command", func: command, args: [] }),
                "*"
            );
        }
    }

    function playVideo() {
        sendCommand("playVideo");
    }

    function pauseVideo() {
        sendCommand("pauseVideo");
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                playVideo();
            } else {
                pauseVideo();
            }
        });
    }, { threshold: 0.5 });

    observer.observe(videoSection);

    videoSection.addEventListener("mouseenter", playVideo);
    videoSection.addEventListener("mouseleave", pauseVideo);
});
