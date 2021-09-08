import React from 'react';
import { Link } from 'react-router-dom';

function Navbar() {
    return (
        <nav>
            <ul className="nav">
                <Link to="/about">
                    <li>About</li>
                </Link>
                <Link to="/User">
                    <li>User</li>
                </Link >
            </ul >
        </nav >
    )
}
export default Navbar;