import Axios from "axios";

const axios = Axios.create({
    baseURL: "http://localhost:8000",
    timeout: 30000,
    withCredentials: true,
    withXSRFToken:true,
    headers: {
        Accept: "application/json",
        "Content-type":"application/json",
        "Access-Control-Allow-Methods":"*",
        "Access-Control-Allow-Origin":"*"
    }
})
/*  */

export default axios;