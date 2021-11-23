class VideoPlayer {
    options = {};
    isFullScreen;
    constructor(options) {
        this.options = options;
        if (!options['selector']) {
            throw "selectoris required";
        }
        this.options.isFullScreen = false;
        if (options['selector'].includes('.')) {
            this.playerContainerElements = document.querySelectorAll(`${options['selector']}`);
            this.playerContainerElements.forEach((item, index, elements) => {
                console.log(item.querySelector('.fullscreen'));
                if (item.querySelector('.fullscreen'))
                    item.querySelector('.fullscreen').addEventListener('click', this.toggleFullscreen);
                item.querySelector(`.play-button`).addEventListener('click', this.toggle);
                item.querySelector(`video`).addEventListener('click', this.toggle);
                item.querySelector('.play-button').innerHTML = `<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512"><g></g><path d="M152.443 136.417l207.114 119.573-207.114 119.593z" fill="#ffffff" /></svg>`;
                if (this.options.autoplay == true){
                    item.querySelector('.play-button').innerHTML = `<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512"><g></g><path d="M162.642 148.337h56.034v215.317h-56.034v-215.316z" fill="#ffffff" /><path d="M293.356 148.337h56.002v215.317h-56.002v-215.316z" fill="#ffffff" /></svg>`;
                }
                item.addEventListener('mouseenter', this.showPlayButton);
                item.addEventListener('mouseleave', this.hidePlayButton);
            });
        }
    }

    toggleFullscreen(e) {
        var isFullScreenNow = document.fullscreenElement || document.webkitFullscreenElement || document.mozFullscreenElement || document.msFullscreenElement;
        if(isFullScreenNow) {
            document.exitFullscreen();
        }else {
            e.target.closest('.video-player').requestFullscreen().catch(console.log);
        }
    }

    showPlayButton = (e) => {
        e.target.querySelector(".play-button").style.visibility = 'visible';
    }
    hidePlayButton = (e) => {
        e.target.querySelector(".play-button").style.visibility = 'hidden';
    }

    toggle = (e) => {
        const playerContainer = e.target.closest(`${this.options['selector']}`);

        this.playerContainerElements.forEach((item) => {
            if (!item.isSameNode(playerContainer) && !item.querySelector('video').paused) {
                item.querySelector('video').pause();
                item.querySelector('.play-button').innerHTML = `<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512"><g></g><path d="M152.443 136.417l207.114 119.573-207.114 119.593z" fill="#ffffff" /></svg>`;
            }
        });

        const video = playerContainer.querySelector('video');
        if (video.paused) {
            video.play();
            video.muted = false;
            playerContainer.querySelector('.play-button').innerHTML = `<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512"><g></g><path d="M162.642 148.337h56.034v215.317h-56.034v-215.316z" fill="#ffffff" /><path d="M293.356 148.337h56.002v215.317h-56.002v-215.316z" fill="#ffffff" /></svg>`;
            playerContainer.querySelector('.play-button').style.visibility = 'visible';
        } else {
            video.pause()
            playerContainer.querySelector('.play-button').innerHTML = `<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512"><g></g><path d="M152.443 136.417l207.114 119.573-207.114 119.593z" fill="#ffffff" /></svg>`;
            playerContainer.querySelector('.play-button').style.visibility = 'hidden';

        }
    }
    pause() {
        this.playerContainerElements.forEach((item) => {
            item.querySelector('video').pause();
            item.querySelector('.play-button').innerHTML = `<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512"><g></g><path d="M152.443 136.417l207.114 119.573-207.114 119.593z" fill="#ffffff" /></svg>`;
        });
    }

}
