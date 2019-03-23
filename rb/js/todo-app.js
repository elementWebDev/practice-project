// To Do App
new Vue({
  el: "#todo-app",
  data: {
    todos: [
      {
        text: "Header",
        done: true
      },
      {
        text: "Footer",
        done: false
      },
      {
        text: "Nav layout",
        done: true
      },
      {
        text: "Categories",
        done: false
      },
      {
        text: "Build Rackbusters components",
        done: false
      },
      {
        text: "Build Rackbusters SPA",
        done: false
      }
    ]
  },
  methods: {
    toggle: function(todo) {
      todo.done = !todo.done;
    }
  }
});