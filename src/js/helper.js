function addEventsListener(element, events, func) {
    events.forEach(event => element.addEventListener(event, func));
}

function addEventListeners(elements, event, func) {
    elements.forEach(element => element.addEventListener(event, func));
}

function addEventsListeners(elements, events, func) {
    events.forEach(event => {
        elements.forEach(element => {
            element.addEventListener(event, func)
        });
    });
}

function querySelectorAlls(selectors) {
    let elementArrays = [];
    selectors.forEach(selector => elementArrays.push(Array.from(document.querySelectorAll(selector))));
    return elementArrays.flat();
}
