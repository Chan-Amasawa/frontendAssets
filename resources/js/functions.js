//functions

import { aboutHeading } from "./selectors";

export const sayHello = () => {
    alert("Hello, Mingalarbar");
};

export const sayMyName = () => {
    aboutHeading.innerText = "Chan";
};
