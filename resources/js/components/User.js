import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { divide } from 'lodash';

function User() {
    const [users, setUsers] = useState([]);
    useEffect(() => {
        getUsers()
    }, [])

    const getUsers = async () => {
        const response = await axios.get('/api/user');
        setUsers(response.data.users)
    }

    return (
        <div>
            <h1> User page</h1>
            <ul>
                {users.map((user) => <li key="[user.id]">{user.name}</li>)}
            </ul>
        </div>
    );

}

export default User;

