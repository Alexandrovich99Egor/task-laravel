import React from 'react';
import ReactDOM from 'react-dom/client';
import '../scss/app.scss';


//Components
import Form from "./component/Form/Form.jsx";

function App() {
    return (
        <section className="main">
            <Form></Form>
        </section>
    );
}

ReactDOM.createRoot(document.getElementById('app')).render(<App/>);
