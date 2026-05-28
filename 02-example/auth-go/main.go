package main

import (
	"encoding/json"
	"net/http"
)

func homeHandler(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Access-Control-Allow-Origin", "*")
	http.Redirect(w, r, "/dashboard", http.StatusSeeOther)
}

func dashboardHandler(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Access-Control-Allow-Origin", "*")
	json.NewEncoder(w).Encode(map[string]string{
		"service": "auth",
		"status":  "logged in",
	})
}

func main() {
	http.HandleFunc("/", homeHandler)
	http.HandleFunc("/dashboard", dashboardHandler)

	http.ListenAndServe(":8080", nil)
}