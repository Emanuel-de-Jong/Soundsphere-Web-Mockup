function ready(fn) {
    if (document.readyState != 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

function addEventsListener(element, events, fn) {
    events.forEach(event => element.addEventListener(event, fn));
}

function addEventListeners(elements, event, fn) {
    elements.forEach(element => element.addEventListener(event, fn));
}

function addEventsListeners(elements, events, fn) {
    events.forEach(event => {
        elements.forEach(element => {
            element.addEventListener(event, fn)
        });
    });
}

function querySelectorAlls(selectors) {
    let elementArrays = [];
    selectors.forEach(selector => elementArrays.push(Array.from(document.querySelectorAll(selector))));
    return elementArrays.flat();
}
