import '../../sass/square.scss';

function RedSquare({size}) {

    return (
        <>
        <div className="square-bin">
        <div className="square" style={{
            width: size + 'px',
            height: size + 'px'
        }}>BBS</div>
        </div>
        <div className="input-bin">
            <button>Add</button>
            <input type="text" />
            <input type="color" />
        </div>
        </>
    );
}

export default RedSquare;
