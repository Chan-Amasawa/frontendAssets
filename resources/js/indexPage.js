import { sayHello } from "./functions";
import { greeting } from "./selectors";

greeting.addEventListener("click", sayHello);
