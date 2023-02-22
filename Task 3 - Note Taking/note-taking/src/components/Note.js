import React, {useEffect, useState} from 'react'
import CreateNote from '../modals/CreateNote'
import Card from './Card';

const Note = () => {
    const [modal, setModal] = useState(false);
    const [noteList, setNoteList] = useState([])

    useEffect(() => {
      let arr = localStorage.getItem("noteList")
      
      if(arr){
            let obj = JSON.parse(arr)
            setNoteList(obj)
      }
    }, [])

    const deleteNote = (index) => {
        let tempList = noteList
        tempList.splice(index, 1)
        localStorage.setItem("noteList", JSON.stringify(tempList))
        setNoteList(tempList)
        window.location.reload()
    }

    const updateListArray = (obj, index) => {
        let tempList = noteList
        tempList[index] = obj
        localStorage.setItem("noteList", JSON.stringify(tempList))
        setNoteList(tempList)
        window.location.reload()
    }

    const toggle = () => {
        setModal(!modal);
    }

    const saveNote = (noteObj) => {
        let templist = noteList
        templist.push(noteObj)
        localStorage.setItem("noteList", JSON.stringify(templist))
        setNoteList(templist)
        setModal(false)
        setNoteList(noteList)
    }

    return (
        <>
            <div className="header text-center">
                <h3 >Note's App</h3>
                <button className="btn btn-primary mt-2" onClick = {() => setModal(true)}>Create Note</button>
            </div>
 
            <div className="note-container">
                {noteList && noteList.map((obj, index) => <Card noteObj = {obj} index = {index} deleteNote = {deleteNote} updateListArray = {updateListArray} />)}
            </div>

            <CreateNote toggle = {toggle} modal = {modal} save={saveNote} />
        </>
    )
}

export default Note;
