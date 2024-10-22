// RES
const consoleLogList = document.querySelector('.editor__console-logs');
const execCodeBtn = document.querySelector('.editor__run');
const resetCodeBtn = document.querySelector('.editor__reset');

// Ace SETUP
let codeEditor = ace.edit("editorCode");
let defaultCode = 'console.log("Hi, world!")';
let consoleMessages = [];

let editorLib = {
    clearConsoleScreen(){
        consoleMessages.length = 0;

        //remove all in log
        while (consoleLogList.firstChild){
            consoleLogList.removeChild(consoleLogList.firstChild);
        }
    },
    printToConsole() {
        consoleMessages.forEach(log => {
            const newLogItem = document.createElement('li');
            const newLogText = document.createElement('pre');

            newLogText.className = log.class;
            newLogText.textContent = `> ${log.message}`;

            newLogItem.appendChild(newLogText);

            consoleLogList.appendChild(newLogItem);
        })
    },
    init(){
        //Theme
        codeEditor.setTheme("ace/theme/dracula");

        //Prog lang
        codeEditor.session.setMode("ace/mode/javascript");

        //Options
        codeEditor.setOptions({
            fontFamily:'',
            fontSize: 13,
            enableBasicAutocompletion: true,
            enableLiveAutocompletion: true,
        });
        
        // DEFAULT
        codeEditor.setValue(defaultCode);

    }
}

//GET VALUE AND RUN CODE
execCodeBtn.addEventListener('click', ()=>{
    
    editorLib.clearConsoleScreen();
    const  userCode = codeEditor.getValue();
    try{
       new Function(userCode)();
    }catch(err){
        console.error(err);
    }

    //print to console
    editorLib.printToConsole();


});

//RESET CODE
resetCodeBtn.addEventListener('click', ()=>{

    //clear console
    editorLib.clearConsoleScreen();
});
editorLib.init();