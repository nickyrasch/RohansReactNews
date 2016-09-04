import React from 'react';
import ReactDOM from 'react-dom';
import Griddle from 'griddle-react'
import object from './object'


class App extends React.Component {
		constructor () {
			super ();
		}
	render(){
		return (
			<div className="container">
			  <h1 className="text-center"> Rohan's React News </h1>
			  <Griddle results={object} showFilter={true} showSettings={true} />
			</div>

			);
	}
}

// class Slider extends React.Component {
// 	render (){
// 	return (
			
// 			  <input type="range"
// 			    min="0"
// 			    max="255"
// 			    onChange={this.props.update} />
			
// 			);

// 	}
// }



export default App