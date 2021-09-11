import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'


import Navbar from './Navbar';
import User from './User';
import About from './About';
import Top from './Top';

function App() {
    return (
        <Router>
            <div>
                <Navbar />
                <Switch>
                    <Route path="/top" exact component={Top} />
                    <Route path='/User' component={User} />
                    <Route path='/About' component={About} />
                </Switch>
            </div>
        </Router>
    )
};





if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
} 