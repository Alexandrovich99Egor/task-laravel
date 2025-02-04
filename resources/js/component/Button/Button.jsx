import React from "react";
import '../Button/Button.scss';


export default function Button({textButton, classButton, action}) {

    return (
        <button onClick={action} className={'button'}>
            {textButton}
        </button>
    )

}
