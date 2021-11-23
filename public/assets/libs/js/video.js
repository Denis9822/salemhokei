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
                if (this.options.autoplay == false){
                    item.querySelector('.play-button').textContent = '❚❚';
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

        console.log(playerContainer)

        this.playerContainerElements.forEach((item) => {
            if (!item.isSameNode(playerContainer) && !item.querySelector('video').paused) {
                item.querySelector('video').pause();
                item.querySelector('.play-button').textContent = '►';
            }
        });

        const video = playerContainer.querySelector('video');
        if (video.paused) {
            video.play();
            video.muted = false;
            playerContainer.querySelector('.play-button').textContent = '❚❚'
            playerContainer.querySelector('.play-button').style.visibility = 'visible';
        } else {
            video.pause()
            playerContainer.querySelector('.play-button').textContent = '►'
            playerContainer.querySelector('.play-button').style.visibility = 'hidden';

        }
    }
    pause() {
        this.playerContainerElements.forEach((item) => {
            item.querySelector('video').pause();
            item.querySelector('.play-button').textContent = '►';
        });
    }

}
