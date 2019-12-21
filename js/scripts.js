(function($) {
   class Search {
        constructor() {
            this.resultsDiv = $("#search-overlay__results");
            this.openButton = $(".js-search-trigger");
            this.closeButton = $(".search-overlay__close");
            this.searchOverlay = $(".search-overlay");
            this.searchField = $("#search-term");
            this.events();
            this.isOverlayOpen = false;
            this.isSpinnerVisable = false;
            this.previousValue;
            this.typingTimer;
        }

        events() {
            this.openButton.on('click', this.openOverlay.bind(this));
            this.closeButton.on('click', this.closeOverlay.bind(this));
            $(document).on("keydown", this.keyPressDispatcher.bind(this));
            this.searchField.on("keyup", this.typingLogic.bind(this));
        }

        typingLogic() {
            if(this.searchField.val() != this.previousValue) {
                clearTimeout(this.typingTimer);
                if(!this.isSpinnerVisable) {
                    this.resultsDiv.html('<div class="spinner-loader"></div>');
                    this.isSpinnerVisable = true;
                }
                this.typingTimer = setTimeout(this.getResults.bind(this), 750);
            }
            this.previousValue = this.searchField.val();
        }

        getResults() {
            this.resultsDiv.html("Imagine real search results here");
            this.isSpinnerVisable = false;
        }

        keyPressDispatcher(e) {
            if(e.keyCode == 83 && !this.isOverlayOpen) {
                this.openOverlay();
            }
            if(e.keyCode == 27 && this.isOverlayOpen) {
                this.closeOverlay();
            }
        }

        openOverlay() {
            this.searchOverlay.addClass("search-overlay--active");
            $("body").addClass('body-no-scroll');
            this.isOverlayOpen = true;
        }

        closeOverlay() {
            this.searchOverlay.removeClass("search-overlay--active");
            $("body").removeClass('body-no-scroll');
            this.isOverlayOpen = false;
        }
   }
   let search = new Search();
})(jQuery);