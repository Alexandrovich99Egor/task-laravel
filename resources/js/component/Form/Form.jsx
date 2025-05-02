import React from "react";
import {useState, useEffect} from "react";
import Button from "../Button/Button.jsx";
import './form.scss';
import axios from "axios";


export default function Form() {
    const hostName = window.location.hostname;
    const port = window.location.port;
    const apiUrl = `http://${hostName}:${port}/api/v1/submits`;

    const [responseState, setResponse] = useState('Nothing');
    const data = {
        name: 'Egor',
        email: 'bbff@mail.ua',
        message: 'test',
    }
    const requestApi = async () => {
        try {
            const response = await axios.post(apiUrl, data, {
                headers: {
                    "Content-Type": "application/json",
                },
            });
            setResponse({
                status: response.status,
                colorStatus: response.status === 200 || 201 ? 'green' : 'red',
                id: response?.data?.data?.id,
                message: response?.data?.data?.message,
                email: response?.data?.data?.email,
                name: response?.data?.data?.name,
            });
        } catch (err) {
            console.log(err)
        }

    }


    return (
        <div className="form">
            <h1 className="form__title">
                Testing API laravel Task
            </h1>
            <div className="form__content">
                <div className="form__request">
                    <h2>
                        Make here request
                    </h2>
                    <div className="form__button">
                        <Button action={requestApi} textButton={'Make Request!Lest do it'}></Button>
                    </div>

                </div>
                <div className="form__response">
                    <h2>
                        Response status here
                    </h2>
                    <div className={`form__status ${responseState.colorStatus}`}>
                        <p>
                            status : {responseState.status}
                        </p>
                        <p>
                            id: {responseState.id}
                        </p>
                        <p>
                            message: {responseState.message}
                        </p>
                        <p>
                            email: {responseState.email}
                        </p>
                        <p>
                            name: {responseState.name}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    )

}
