import { useEffect, useRef, useState } from 'react';
import '../../sass/square.scss';
import axios from 'axios';
import { random } from 'lodash';

function RedSquare({ size, ziggy }) {

    const [text, setText] = useState('');
    const [color, setColor] = useState('#ffffff');
    const [squares, setSquares] = useState([]);

    useEffect(() => {
        axios.get(ziggy.url + '/get-square')
        .then(res => setSquares(res.data.squares))
    }, []);

    const add = () => {
        axios.post(ziggy.url + '/add-square', {text, color})
        .then(res => {

        })
        refresh.current = '_' + random(0, 10);
        setSquares(s => [...s, { text, color }]);
        setText('');
        setColor('#ffffff');
    }

    const refresh = useRef('_1');

    const reset = () => {
        axios.delete(ziggy.url + '/reset-squares');
        setSquares(s => []);
        setText('');
        setColor('#ffffff');
    }

    return (
        <>
            <div className="square-bin">
                {
                    squares.map((s, i) => <div key={i + refresh.current} className="square" style={{
                        width: size + 'px',
                        height: size + 'px',
                        backgroundColor: s.color + '70',
                    }}>{s.text}</div>)
                }

            </div>
            <div className="input-bin">
                <button onClick={add}>Add</button>
                <input type="text" value={text} onChange={e => setText(e.target.value)} />
                <input type="color" value={color} onChange={e => setColor(e.target.value)} />
                <button onClick={reset}>Reset</button>
            </div>
        </>
    );
}

export default RedSquare;
