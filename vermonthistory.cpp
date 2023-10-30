//
// Created by Liam casey on 10/26/23.
//
//

#include <fstream>
#include <iostream>
#include <string>
#include <vector>

using namespace std;
//main function takes 3 arguments 1 for each quiz question
int main(int argc, char* argv[3]) {
    // Store the arguments that is passed as a command line argument
    string leader_answer = argv[1];
    string country_answer = argv[2];
    string join_answer = argv[3];
    //intialize correct and incorrect
    int correct = 0;
    int incorrect = 0;
    // check if answer was correct or incorrect for each question
    if(leader_answer == "EthanAllen"){
        correct++;
    }
    else{
        incorrect++;
    }
    if(country_answer == "Canada"){
        correct++;
    }
    else{
        incorrect++;
    }
    if(join_answer == "1791"){
        correct++;
    }
    else{
        incorrect++;
    }
    const string python = "python3";
    // inform the user how they did
    cout<<"you got: "<< correct<< " correct"<<endl;
    cout<<"you got: "<< incorrect<< " incorrect"<<endl;
    // call piechart.py with the correct data
    string command = python + " piechart.py" + " " + to_string(correct) + " " + to_string(incorrect);

    system(command.c_str());
    return correct;
}