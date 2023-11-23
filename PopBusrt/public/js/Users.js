import { getUsers } from "./fetchUsers.js";
import { drawUsers } from "./codeHTML.js";

const showUsers = async() => {
    const users = await getUsers();
    if (users !== null) {
        drawUsers(users);
    }
}

showUsers();