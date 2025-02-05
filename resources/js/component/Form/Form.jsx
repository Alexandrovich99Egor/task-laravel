import React from "react";
import {useState, useEffect} from "react";
import Button from "../Button/Button.jsx";
import './form.scss';
import axios from "axios";


export default function Form() {
    const hostName = window.location.hostname;
    const apiUrl = 'http://127.0.0.1:8000/api/v1/submits';
    const [responseState, setResponse] = useState('Nothing');
    const TESTINGDATA = {
        name: 'Egor TEST',
        email: 'bbff@mail.ua',
        message: 'test',
    }
    const ruquest = async () => {
        try {
            const response = await axios.post(apiUrl, TESTINGDATA, {
                headers: {
                    "Content-Type": "application/json",
                },
            });
            console.log(response)
            setResponse({
                status: response.status,
                colorStatus: response.status === 200 || 201 ? 'green' : 'red',
                id: response?.data?.data?.id,
                message: response?.data?.data?.message,
                email: response?.data?.data?.email,
                name: response?.data?.data?.name,
            });
        } catch (err) {
            setResponse({
                message: err.response.data.message,
                status: err.response.status,
                colorStatus: 'red',
            })
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
                        <Button action={ruquest} textButton={'Make Request!Lest do it'}></Button>
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
