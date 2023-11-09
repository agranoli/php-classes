#include <iostream>
#include <string>

using namespace std;

class Car{
    public:
        string brand;
        Car(string brand){
            this->brand = brand;
        }
        Car (string brand, int mileage){
            this->brand = brand;
            this->mileage = mileage;
        }
        ~Car(){
            cout << this->brand << "NIGGABALZZZZZZZZZZZ" <<endl;
        }
    private:
        int mileage = 0;
};

int main() {
    Car* myCar = new Car("Dacia", 19000);
    cout << myCar->brand << endl;
}