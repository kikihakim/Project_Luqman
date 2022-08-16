import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(title: const Text("TextFormField Value")),
        body: Center(child: _GetTextFormValue())));
  }  
}

class _GetTextFormValue extends StatefulWidget {
  @override
  _TextFormValueState createState() => _TextFormValueState ();
}

class _TextFormValueState extends State<_GetTextFormValue> {
  final textFormValueHolder = TextEditingController();
  String result = '';
  getTextFormInput() {
    setState(() {
      result = textFormValueHolder.text;
    });
   }
  
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      
      body: Container(
        padding: const EdgeInsets.all(25),
        child: Column(
          children: [
            const SizedBox(
              height: 50,
            ),
            const Center(
              child: Text(
                "Flutter Form Field",
                style : TextStyle(fontSize: 24),
              ),
            ),
            const SizedBox(
              height: 50,
            ),
            Form(
              child: TextFormField(
                controller: textFormValueHolder,
                autocorrect: true,
                decoration: const InputDecoration(
                  hintText: "Enter Your Name",
                  labelText: "Your Name",
                  labelStyle: TextStyle(fontSize: 20, color: Colors.black),
                  border: OutlineInputBorder(),
                  fillColor: Colors.black12,
                  filled: true,
                  suffixIcon: Align(
                    widthFactor: 1.0,
                    heightFactor: 1.0,
                    child: Icon(
                      Icons.add_circle,
                      color: Colors.grey,),
                      )
                    ),
                    maxLength: 30,
                  )
                ),
                ElevatedButton(
                  onPressed: getTextFormInput,
                  style: ElevatedButton.styleFrom(
                    primary: Colors.pinkAccent,
                    onPrimary: Colors.yellow,
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(35),
                      ),
                      elevation: 25.0),
                      child: const Text('Submit'),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(20.0),
                    child: Text("Your Name is : $result",
                        style: const TextStyle(fontSize: 20)))
          ]
   
        ),
      ),
    );
  }
}
