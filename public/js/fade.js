

class showText {
    constructor(parameters) {
        this.scroll_elements = document.querySelectorAll('.scroll-fade');
        
        this.hideScrollElements(this.scroll_elements);
        this.getScreenHeight();
    }

    getScreenHeight()
    {
        let elements = this.scroll_elements;

        let observer = new IntersectionObserver( (entries, observer) => {
            entries.forEach(entry => 
            {
                if(entry.isIntersecting)
                {
                    this.fadeIn( entry.target ); //target is het element dat hij aan het observen is
                } else
                {
                    this.fadeOut( entry.target );
                }
            });
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    }

    fadeIn( element )
    {
        element.classList.replace('hide-scroll-fade', 'fade-in-scroll-fade');
    }

    fadeOut( element )
    {
        element.classList.replace('fade-in-scroll-fade', 'hide-scroll-fade');    
    }

    hideScrollElements( elements )
    {
        elements.forEach( element => {
            element.classList.add('hide-scroll-fade')
        })
    }
}

window.addEventListener('load', () => {
    new showText();
});